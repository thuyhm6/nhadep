<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Revolution\Google\Sheets\Facades\Sheets as FacadesSheets;
use App\Services\GoogleSheetsService;


class HomeController extends Controller
{



    public function index()
    {
        // // $slides = Slide::where('status','=',1)->get()->take(3);
        // $categories = Category::orderBy('name')->get();
        // $sproducts = Product::whereNotNull('sale_price')->where('sale_price','<>','')->inRandomOrder()->get()->take(8);
        $f1data = Product::where('featured', 1)->get()->take(10);
        $f2data = Product::where('featured', 2)->get()->take(10);

        return view('home.index', compact('f1data', 'f2data'));
    }

    public function maunhadep(Request $request, $mau_nha = null)
    {
        $query = Product::query();

        // Slug ưu tiên từ route param, nếu không thì từ query string
        $slug = $mau_nha ?? $request->get('mau_nha');

        if ($slug) {
            $query->whereHas('category', function ($q) use ($slug) {
                $q->where('slug', $slug);
            });

            // Ghi lại để giữ selected trong <select>
            $request->merge(['mau_nha' => $slug]);
        }

        if ($request->filled('keyword')) {
            $slugKeyword = Str::slug($request->keyword);
            $query->where(function ($q) use ($slugKeyword) {
                $q->where('name', 'like', "%{$slugKeyword}%")
                    ->orWhere('slug', 'like', "%{$slugKeyword}%");
            });
        }

        if ($request->filled('phong_cach')) {
            $brand = Brand::where('slug', $request->phong_cach)->first();
            if ($brand) {
                $query->where('brand_id', $brand->id);
            }
        }


        foreach (['floors', 'bedrooms', 'facade_width', 'depth_length'] as $field) {
            if ($request->filled($field)) {
                $query->where($field, $request->get($field));
            }
        }

        $houses = $query->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();

        if ($request->ajax()) {
            return view('home.house-list', compact('houses'))->render();
        }

        return view('home.maunhadep', compact('houses', 'categories', 'brands'));
    }



    public function detailProduct($slug)
    {
        $house = Product::where('slug', $slug)->firstOrFail();
        $latest = Product::latest()->take(5)->get();
        return view('home.detailProduct', compact('house', 'latest'))->with($this->withProductSeo($house));
    }



    public function contactHome(Request $request, GoogleSheetsService $sheetService)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'house_type' => 'required|string|max:100',
            ]);

            // // lưu đb
            // Contact::create($data);

            Mail::raw(
                "Khách hàng: {$data['name']}\nSĐT: {$data['phone']}\nĐịa chỉ: {$data['address']}\nLoại nhà: {$data['house_type']}",
                fn($msg) => $msg->to('quyendvpa00242@gmail.com')->subject('NHÀ ĐẸP - Thông tin khách hàng liên hệ báo giá')
            );

            $sheetService->appendRow([
                now()->toDateTimeString(),
                $data['name'],
                $data['phone'],
                $data['address'],
                $data['house_type'],
            ]);

            return $request->ajax()
                ? response()->json(['success' => true, 'message' => '✅ Gửi thành công, chúng tôi sẽ liên với bạn ngay!'])
                : redirect()->route('home.index')->with('success', '✅ Gửi thành công, chúng tôi sẽ liên với bạn ngay!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        }
    }



    public function contact(Request $request)
    {
        return view('home.contact');
    }

    public function sendContactMessage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:100',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $recipients = [
            'quyendvpa00242@gmail.com',
            'quyendau1603@gmail.com',
        ];

        Mail::raw(
            "Tên khách hàng: {$data['name']}\nEmail: {$data['email']}\nVấn đề: {$data['subject']}\nLí do: {$data['message']}",
            fn($msg) => $msg->to($recipients)->subject('NHÀ ĐẸP - thông tin khách hàng liên hệ phản hồi')
        );


        return redirect()->route('home.contact')->with('success', '✅ Gửi thành công, chúng tôi sẽ nhanh chóng phản hồi với bạn ngay!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results =  Product::where('name', 'LIKE', "%{$query}%")->get()->take(8);
        return response()->json($results);
    }

    public function about()
    {
        return view('home.about');
    }


    public function calculate()
    {
        return view('home.calculate');
    }
}
