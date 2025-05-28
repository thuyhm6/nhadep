@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            {{-- <pre>{{ print_r($errors->all(), true) }}</pre> debug trường hợp không hiển thị lỗi --}}

            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit Product</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{ route('admin.products') }}">
                            <div class="text-tiny">Products</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit product</div>
                    </li>
                </ul>
            </div>
            <!-- form-edit-product -->
            <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
                action="{{ route('admin.product.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product name <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="name" tabindex="0"
                            value="{{ $product->name }}" aria-required="true" required="">
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                    </fieldset>
                    @error('name')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Từ khóa SEO tên mẫu nhà (nếu có)<span
                                class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Nhập tên mẫu nhà SEO" name="meta_title"
                            tabindex="0" value="{{ $product->meta_title }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('meta_title')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product slug" name="slug" tabindex="0"
                            value="{{ $product->slug }}" aria-required="true" required="">
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                    </fieldset>
                    @error('slug')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror


                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Short Description <span lass="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" name="short_description" placeholder="Short Description" tabindex="0"
                            aria-required="true" required="">{{ $product->short_description }}</textarea>
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                    </fieldset>
                    @error('short_description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Mô tả ngắn SEO (nếu có)<span lass="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" name="meta_description" placeholder="nhập mô tả ngắn SEO" tabindex="0"
                            aria-required="true" required="">{{ $product->meta_description }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('meta_description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <textarea class="mb-10 ckeditor" name="description" placeholder="Description" tabindex="0" aria-required="true"
                            required="">{{ $product->description }}</textarea>
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                    </fieldset>
                    @error('description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span>
                        </div>
                        <div class="upload-image flex-grow">
                            @if ($product->image)
                                <div class="item" id="imgpreview">
                                    <img src="{{ asset('uploads/products/' . $product->image) }}" class="effect8"
                                        alt="{{ $product->name }}">
                                </div>
                            @endif
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click
                                            to
                                            browse</span></span>
                                    <input type="file" id="myFile" name="image" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('image')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset>
                        <div class="body-title mb-10">Upload Gallery Images</div>
                        <div class="upload-image mb-16">
                            @if ($product->images)
                            
                                @foreach (explode(',', $product->images) as $img)
                                    <div class="item gitem">
                                        <img src="{{ asset('uploads/products/thumbnails/' . $img) }}" alt="">
                                    </div>
                                @endforeach
                            @endif
                            <div id="galUpload" class="item up-load">
                                <label class="uploadfile" for="gFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click
                                            to browse</span></span>
                                    <input type="file" id="gFile" name="images[]" accept="image/*"
                                        multiple="">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    @error('images')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Giá tham khảo <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập giá tham khảo"
                                name="regular_price" tabindex="0" value="{{ $product->regular_price }}"
                                aria-required="true" required="">
                        </fieldset>
                        @error('regular_price')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>

                     <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">Category <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="category_id">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        @error('category_id')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror
                        <fieldset class="brand">
                            <div class="body-title mb-10">Brand <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="brand_id">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        @error('brand_id')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Mã mẫu nhà <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập mã mẫu nhà" name="SKU"
                                tabindex="0" value="{{ $product->SKU }}" aria-required="true" required="">
                        </fieldset>
                        @error('SKU')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Hiển thị nổi bật</div>
                            <div class="select mb-10">
                                <select name="featured">
                                    <option value="0" {{ $product->featured == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $product->featured == 1 ? 'selected' : '' }}>Nổi bật 1
                                    </option>
                                    <option value="2" {{ $product->featured == 2 ? 'selected' : '' }}>Nổi bật 2
                                    </option>
                                </select>

                            </div>
                        </fieldset>
                        @error('featured')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Số phòng ngủ <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập số phòng ngủ" name="bedrooms"
                                tabindex="0" value="{{ $product->bedrooms }}" aria-required="true" required="">
                        </fieldset>
                        @error('bedrooms')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Số tầng <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập số tầng" name="floors"
                                tabindex="0" value="{{ $product->floors }}" aria-required="true" required="">
                        </fieldset>
                        @error('floors')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Chiều rộng <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập chiều rộng" name="facade_width"
                                tabindex="0" value="{{ $product->facade_width }}" aria-required="true"
                                required="">
                        </fieldset>
                        @error('facade_width')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Chiều dài <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập chiều dài" name="depth_length"
                                tabindex="0" value="{{ $product->depth_length }}" aria-required="true"
                                required="">
                        </fieldset>
                        @error('depth_length')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Diện tích <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập chiều rộng" name="area"
                                tabindex="0" value="{{ $product->area }}" aria-required="true" required="">
                        </fieldset>
                        @error('area')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        {{-- <fieldset class="name">
                        <div class="body-title mb-10">Chiều dài <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập chiều dài" name="depth_length" tabindex="0" value="{{ old('depth_length') }}" aria-required="true" required="">
                    </fieldset>
                    @error('depth_length')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror --}}

                    </div>

                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit">Update product</button>
                    </div>
                </div>
            </form>
            <!-- /form-add-product -->
        </div>
        <!-- /main-content-wrap -->
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            // Xử lý xem trước ảnh đại diện
            $("#myFile").on("change", function(e) {
                const [file] = this.files;
                if (file) {
                    $("#imgpreview img").attr("src", URL.createObjectURL(file));
                    $("#imgpreview").show();
                }
            });

            // Xử lý xem trước gallery ảnh
            $("#gFile").on("change", function(e) {
                const gphotos = this.files;
                $.each(gphotos, function(key, value) {
                    $("#galUpload").prepend(
                        `<div class="item gitems"><img src="${URL.createObjectURL(value)}" alt=""></div>`
                    );
                });
            });

            // Tự tạo slug theo tên nhập
            $("input[name='name']").on("input", function() {
                $("input[name='slug']").val(stringToSlug($(this).val()));
            });

            function stringToSlug(str) {
                return str
                    .toLowerCase()
                    .normalize("NFD") // chuyển dấu thành ký tự base
                    .replace(/[\u0300-\u036f]/g, "") // bỏ dấu
                    .replace(/[^a-z0-9\s-]/g, "") // bỏ ký tự đặc biệt
                    .trim()
                    .replace(/\s+/g, "-") // thay space = -
                    .replace(/-+/g, "-") // bỏ dấu - lặp
                    .replace(/^-|-$/g, ""); // bỏ - đầu/cuối
            }
        });
    </script>
@endpush
