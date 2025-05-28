<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Attach SEO data from model to the view.
     */
    // protected function withPostSeo(Product $house): array
    // {
    //     return [
    //         'meta_title' => $house->name,
    //         'meta_description' => Str::limit(strip_tags($house->short_description ?? $house->description), 160),
    //         'meta_image' => $house->image ?? asset('default.jpg'),
    //         'canonical' => url()->current(),
    //     ];
    // }

    protected function withProductSeo(Product $house): array
    {
        return [
            'meta_title' => $house->meta_title ?? $house->name,
            'meta_description' => Str::limit(strip_tags($house->meta_description ?? $house->short_description), 160),
            'meta_image' => $house->image ?? asset('default.jpg'),
            'canonical' => url()->current(),
        ];
    }
}