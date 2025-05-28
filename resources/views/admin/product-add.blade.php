@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Thêm Mẫu Nhà</h3>
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
                            <div class="text-tiny">Danh sách mẫu nhà</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Thêm mẫu nhà</div>
                    </li>
                </ul>
            </div>
            <!-- form-add-product -->
            <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
                action="{{ route('admin.product.store') }}">
                @csrf
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Tên mẫu nhà <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Nhập tên mẫu nhà" name="name" tabindex="0"
                            value="{{ old('name') }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('name')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Từ khóa SEO tên mẫu nhà (nếu có)<span
                                class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Nhập tên mẫu nhà SEO" name="meta_title"
                            tabindex="0" value="{{ old('meta_title') }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('meta_title')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập từ khóa" name="slug" tabindex="0"
                            value="{{ old('slug') }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('slug')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror



                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Mô tả ngắn <span lass="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" name="short_description" placeholder="nhập mô tả ngắn" tabindex="0"
                            aria-required="true" required="">{{ old('short_description') }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('short_description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Mô tả ngắn SEO (nếu có)<span lass="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" name="meta_description" placeholder="nhập mô tả ngắn SEO" tabindex="0"
                            aria-required="true" required="">{{ old('meta_description') }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('meta_description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="description">
                        <div class="body-title mb-10">Nội dung <span class="tf-color-1">*</span></div>
                        {{--  Hien thi du lieu can {{!! $product->description !! }} --}}
                        <textarea class="mb-10 ckeditor" name="description" placeholder="Nhập mô tả" tabindex="0" aria-required="true"
                            required="">{{ old('description') }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 10000 ký tự.</div>
                    </fieldset>
                    @error('description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Tải ảnh chính <span class="tf-color-1">*</span>
                        </div>
                        <div class="upload-image flex-grow">
                            <div class="item" id="imgpreview" style="display:none">
                                <img src="../../../localhost_8000/images/upload/upload-1.png" class="effect8"
                                    alt="">
                            </div>
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
                        <div class="body-title mb-10">Tải nhiều ảnh</div>
                        <div class="upload-image mb-16">
                            <!-- <div class="item">
                    <img src="images/upload/upload-1.png" alt="">
                </div>                                                 -->
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
                                name="regular_price" tabindex="0" value="{{ old('regular_price') }}"
                                aria-required="true" required="">
                        </fieldset>
                        @error('regular_price')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">Loại nhà <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="category_id">
                                    <option>Chọn mẫu nhà</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        @error('category_id')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror
                        <fieldset class="brand">
                            <div class="body-title mb-10">Kiểu nhà <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="brand_id">
                                    <option>Chọn kiểu nhà</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
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
                                tabindex="0" value="{{ old('SKU') }}" aria-required="true" required="">
                        </fieldset>
                        @error('SKU')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Hiển thị nổi bật</div>
                            <div class="select mb-10">
                                <select class="" name="featured">
                                    <option value="0">No</option>
                                    <option value="1">Nổi bật 1</option>
                                    <option value="2">Nổi bật 2</option>
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
                                tabindex="0" value="{{ old('bedrooms') }}" aria-required="true" required="">
                        </fieldset>
                        @error('bedrooms')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Số tầng <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập số tầng" name="floors"
                                tabindex="0" value="{{ old('floors') }}" aria-required="true" required="">
                        </fieldset>
                        @error('floors')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Chiều rộng <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập chiều rộng" name="facade_width"
                                tabindex="0" value="{{ old('facade_width') }}" aria-required="true" required="">
                        </fieldset>
                        @error('facade_width')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Chiều dài <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập chiều dài" name="depth_length"
                                tabindex="0" value="{{ old('depth_length') }}" aria-required="true" required="">
                        </fieldset>
                        @error('depth_length')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Diện tích <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập chiều rộng" name="area"
                                tabindex="0" value="{{ old('area') }}" aria-required="true" required="">
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
                        <button class="tf-button w-full" type="submit">Add product</button>
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

            // chuyển đổi tên mẫu nhà thành slug
            $("input[name='name']").on("input", function() {
                $("input[name='slug']").val(stringToSlug($(this).val()));
            });

            function stringToSlug(str) {
                return str
                    .toLowerCase()
                    .replace(/đ/g, 'd') // chuyển riêng đ
                    .replace(/Đ/g, 'd') // chuyển riêng Đ
                    .normalize("NFD") // tách dấu
                    .replace(/[\u0300-\u036f]/g, "") // xoá dấu
                    .replace(/[^a-z0-9\s-]/g, "") // xoá ký tự đặc biệt
                    .trim()
                    .replace(/\s+/g, "-") // space → dấu -
                    .replace(/-+/g, "-") // xoá dấu - lặp
                    .replace(/^-|-$/g, ""); // bỏ dấu - đầu/cuối
            }

        });
    </script>
@endpush
