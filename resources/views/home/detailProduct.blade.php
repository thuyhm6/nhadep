@extends('layouts.app')
@section('title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_image', $meta_image) 
@section('canonical', $canonical)

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- LightGallery CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet" />

    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>

    <style>
        .swiper-thumbs .swiper-slide {  
            opacity: 0.6;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .swiper-thumbs .swiper-slide-thumb-active {
            opacity: 1;
            border: 2px solid #dc3545;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
            width: 48px;
            height: 48px;
        }
    </style>


    <!-- SwiperJS Styles -->

    <div class="container ">
        <!-- Breadcrumb -->


        <div class="row ">

            <!-- Main Content -->
            <div class="col-md-9 px-5">
                <nav>
                    <ol class="breadcrumb bg-light  py-2 rounded">
                        <li class="breadcrumb-item"><a href="/">Trang chủ </a></li>
                        <li class="breadcrumb-item">></li>
                        <li class="breadcrumb-item active">{{ $house->name }}</li>
                    </ol>
                </nav>
                <h1 class="py-4 font-weight-bold">{{ $house->name }}</h1>

                <!-- Swiper ảnh chính -->
                <div id="lightGallery" class="swiper mySwiper2 mb-3 shadow-sm rounded overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach (explode(',', $house->images ?? '') as $img)
                            <div class="swiper-slide d-flex justify-content-center">
                                <a href="{{ asset('uploads/products/' . trim($img)) }}" class="d-block">
                                    <img src="{{ asset('uploads/products/' . trim($img)) }}" class="img-fluid rounded"
                                        style="height: auto;">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>


                <!-- Thumbnail dưới -->
                <div class="swiper mySwiperThumbs swiper-thumbs py-2">
                    <div class="swiper-wrapper">
                        @foreach (explode(',', $house->images) as $img)
                            <div class="swiper-slide" style="width: 130px;">
                                <div class="overflow-hidden rounded border" style="aspect-ratio: 4 / 3;">
                                    <img src="{{ asset('uploads/products/thumbnails/' . trim($img)) }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <!-- Chi tiết kỹ thuật -->
                <div class="row bg-danger text-white text-center py-3 rounded mb-4 spec-row">
                    <div class="col border-end">
                        <div class="fw-bolder text-dark">Phong cách</div>
                        <div class="font-weight-bold">{{ $house->brand->name ?? 'N/A' }}</div>
                    </div>
                    <div class="col border-end">
                        <div class="fw-bolder text-dark">Phòng ngủ</div>
                        <div class="font-weight-bold">{{ $house->bedrooms }} phòng</div>
                    </div>
                    <div class="col border-end">
                        <div class="fw-bolder text-dark">Số tầng</div>
                        <div class="font-weight-bold">{{ $house->floors }} tầng</div>
                    </div>
                    <div class="col border-end">
                        <div class="fw-bolder text-dark">Diện tích đất</div>
                        <div class="font-weight-bold">{{ $house->facade_width }}x{{ $house->depth_length }}m</div>
                    </div>
                    <div class="col border-end">
                        <div class="fw-bolder text-dark">Diện tích xây dựng</div>
                        <div class="font-weight-bold">{{ round($house->area, 2) }} m²</div>
                    </div>
                    <div class="col">
                        <div class="fw-bolder text-dark">Giá tham khảo</div>
                        <div class="font-weight-bold">{{ number_format($house->regular_price, 0, ',', '.') }} ₫</div>
                    </div>
                </div>


                <!-- Mô tả -->
                <div class="mb-4 py-5 bg-white rounded shadow-sm">
                    <span class="">{{ $house->short_description }}</span>
                    
                </div>
                <p>{!! $house->description !!}</p>
            </div>

            <!-- Sidebar -->
            <div class="col-md-3">
                <h5 class="bg-danger text-white px-3 py-2 rounded">Mẫu nhà mới nhất</h5>
                @foreach ($latest as $item)
                    <div class="media mb-3 py-3 bg-white rounded shadow-sm overflow-hidden">
                        <a href="{{ route('detailProduct', $item->slug) }}" class="text-dark d-flex">
                            <img src="{{ asset('uploads/products/' . $item->image) }}" class="mr-3" width="80"
                                alt="ảnh nhỏ">
                            <div class="media-body px-3 d-flex align-items-center">
                                <div class="font-weight-bold">{{ $item->name }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SwiperJS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiperThumbs = new Swiper(".mySwiperThumbs", {
            spaceBetween: 10,
            slidesPerView: 'auto',
            freeMode: true,
            watchSlidesProgress: true,
        });

        var swiperMain = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            thumbs: {
                swiper: swiperThumbs,
            },
        });

        lightGallery(document.getElementById('lightGallery'), {
            selector: 'a',
            plugins: [lgZoom, lgThumbnail],
            speed: 500,
            thumbnail: true,
            zoom: true,
        });
    </script>
@endsection
