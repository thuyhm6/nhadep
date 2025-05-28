@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            {{-- <pre>{{ print_r($errors->all(), true) }}</pre> debug trường hợp không hiển thị lỗi --}}

            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Edit post</h3>
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
                        <a href="{{ route('admin.posts') }}">
                            <div class="text-tiny">posts</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit post</div>
                    </li>
                </ul>
            </div>
            <!-- form-edit-post -->
            <form class="tf-section-2 form-edit-post" method="POST" enctype="multipart/form-data"
                action="{{ route('admin.post.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $post->id }}">
                <div class="wg-box">
                    <fieldset class="category">
                        <div class="body-title mb-10">Loại bài viết <span class="tf-color-1">*</span>
                        </div>
                        <div class="select">
                            <select class="" name="post_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $post->post_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </fieldset>
                    @error('post_id')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Tiêu đề <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Nhập tên mẫu nhà" name="title" tabindex="0"
                            value="{{ $post->title }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('title')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Từ khóa SEO tên mẫu nhà (nếu có)<span
                                class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Nhập tên mẫu nhà SEO" name="meta_title"
                            tabindex="0" value="{{ $post->meta_title }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('meta_title')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập từ khóa" name="slug" tabindex="0"
                            value="{{ $post->slug }}" aria-required="true" required="">
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('slug')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror



                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Mô tả ngắn <span lass="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" name="short_description" placeholder="nhập mô tả ngắn" tabindex="0"
                            aria-required="true" required="">{{ $post->short_description }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('short_description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Mô tả ngắn SEO (nếu có)<span lass="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" name="meta_description" placeholder="nhập mô tả ngắn SEO" tabindex="0"
                            aria-required="true" required="">{{ $post->meta_description }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 100 ký tự.</div>
                    </fieldset>
                    @error('meta_description')
                        <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="description">
                        <div class="body-title mb-10">Nội dung <span class="tf-color-1">*</span></div>
                        {{-- Hien thi du lieu can {{!! $post->description !! }} --}}
                        <textarea class="mb-10 ckeditor" name="description" placeholder="Nhập mô tả" tabindex="0" aria-required="true"
                            required="">{{ $post->description }}</textarea>
                        <div class="text-tiny">Không được nhập quá tối đa 100000 ký tự.</div>
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
                             @if ($post->image)
                                <div class="item" id="imgpreview">
                                    <img src="{{ asset('uploads/posts/' . $post->image) }}" class="effect8"
                                        alt="{{ $post->name }}">
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


                    <div class="cols gap22">


                        <fieldset class="name">
                            <div class="body-title mb-10">Tên tác giả <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Nhập giá tham khảo" name="author"
                                value="{{ $post->author }}" aria-required="true" required="">
                        </fieldset>
                        @error('author')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                        <fieldset class="name">
                            <div class="body-title mb-10">Trạng thái</div>
                            <div class="select mb-10">
                                <select class="" name="published">
                                    <option value="0" {{ $post->published == 0 ? 'selected' : '' }}>Nháp</option>
                                    <option value="1" {{ $post->published == 1 ? 'selected' : '' }}>Đã đăng</option>
                                </select>
                            </div>
                        </fieldset>
                        @error('published">')
                            <span class="alert alert-danger text-center">{{ $message }}</span>
                        @enderror

                    </div>

                    {{-- <fieldset>
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
                @enderror --}}



                    {{-- <div class="gap22 cols">
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
                </div> --}}

                    {{-- <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Số phòng ngủ <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập số phòng ngủ" name="bedrooms"
                            tabindex="0" value="{{ $post->bedrooms') }}" aria-required="true" required="">
                    </fieldset>
                    @error('bedrooms')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Số tầng <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập số tầng" name="floors"
                            tabindex="0" value="{{ $post->floors') }}" aria-required="true" required="">
                    </fieldset>
                    @error('floors')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                </div>
                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Chiều rộng <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập chiều rộng" name="facade_width"
                            tabindex="0" value="{{ $post->facade_width') }}" aria-required="true" required="">
                    </fieldset>
                    @error('facade_width')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Chiều dài <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập chiều dài" name="depth_length"
                            tabindex="0" value="{{ $post->depth_length') }}" aria-required="true" required="">
                    </fieldset>
                    @error('depth_length')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                </div>
                <div class="cols gap22">
                    <fieldset class="name">
                        <div class="body-title mb-10">Diện tích <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập chiều rộng" name="area"
                            tabindex="0" value="{{ $post->area') }}" aria-required="true" required="">
                    </fieldset>
                    @error('area')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                    <fieldset class="name">
                        <div class="body-title mb-10">Chiều dài <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Nhập chiều dài" name="depth_length" tabindex="0" value="{{ $post->depth_length') }}" aria-required="true" required="">
                    </fieldset>
                    @error('depth_length')
                    <span class="alert alert-danger text-center">{{ $message }}</span>
                    @enderror

                </div> --}}

                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit">Edit post</button>
                    </div>
                </div>
            </form>
            <!-- /form-add-post -->
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
