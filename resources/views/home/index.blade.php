@extends('layouts.app') {{-- //Cần check chỗ này --}}
@section('title', 'Xây nhà trọn gói tại Thanh Hóa - Kiến trúc Nhà Đẹp')
@section('meta_description', 'Đơn vị thiết kế & thi công nhà uy tín tại Thanh Hóa. Tư vấn miễn phí, báo giá rõ ràng.')
@section('meta_image', asset('images/banners/banner1.jpg'))
@section('canonical', route('home.index'))
@section('content')
    <!-- Video Start -->
    <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('images/carousel-1.jpg') }}'>">
        <video class="img-fluid w-100" autoplay loop muted playsinline>
            <source src="{{ asset('images/logo/introNhaDep.mp4') }}" type="video/mp4">
            Trình duyệt của bạn không hỗ trợ video.
        </video>
    
    </div>
    <!-- Video End -->


    {{-- Thông tin nổi bật --}}
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-box">
                <h2>7+</h2>
                <p>Năm kinh nghiệm</p>
            </div>
            <div class="stat-box">
                <h2>100+</h2>
                <p>Nhân sự</p>
            </div>
            <div class="stat-box">
                <h2>1386+</h2>
                <p>Khách hàng</p>
            </div>
            <div class="stat-box">
                <h2>326</h2>
                <p>Công trình</p>
            </div>
        </div>
    </section>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
                <h4 class="section-title">Dịch vụ của chúng tôi</h4>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img class="bg-img" src="{{ asset('images/services/service-1.jpg') }}" alt="Ảnh nền">

                        <div class="service-content">
                            <div class="service-default">
                                <img class="service-icon" src="{{ asset('images/icons/icon-1.png') }}" alt="Icon">
                                <h3 class="service-title">Xây dụng trọn gói</h3>
                                <p class="service-desc">Dịch vụ trọn gói từ thiết kế đến thi công.
                                </p>
                            </div>

                            <div class="service-hover">
                                <a href="#" class="btn-readmore">+ Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img class="bg-img" src="{{ asset('images/services/service-2.jpg') }}" alt="Ảnh nền">

                        <div class="service-content">
                            <div class="service-default">
                                <img class="service-icon" src="{{ asset('images/icons/icon-5.png') }}" alt="Icon">
                                <h3 class="service-title">Thiết kế Kiến trúc</h3>
                                <p class="service-desc">Thiết kế kiến trúc sáng tạo, phù hợp với mọi không gian và nhu cầu
                                </p>
                            </div>

                            <div class="service-hover">
                                <a href="#" class="btn-readmore">+ Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img class="bg-img" src="{{ asset('images/services/service-3.jpg') }}" alt="Ảnh nền">

                        <div class="service-content">
                            <div class="service-default">
                                <img class="service-icon" src="{{ asset('images/icons/icon-7.png') }}" alt="Icon">
                                <h3 class="service-title">Thiết kế nội thất</h3>
                                <p class="service-desc">Thiết kế nội thất tinh tế, tối ưu công năng – đẹp chuẩn gu, tiện
                                    nghi từng mét vuông
                                </p>
                            </div>

                            <div class="service-hover">
                                <a href="#" class="btn-readmore">+ Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img class="bg-img" src="{{ asset('images/services/service-4.jpg') }}" alt="Ảnh nền">

                        <div class="service-content">
                            <div class="service-default">
                                <img class="service-icon" src="{{ asset('images/icons/icon-8.png') }}" alt="Icon">
                                <h3 class="service-title">Thiết kế bản vẽ</h3>
                                <p class="service-desc">Bản vẽ chi tiết, chuẩn kỹ thuật – nền tảng vững chắc cho công trình
                                    hoàn hảo
                                </p>
                            </div>

                            <div class="service-hover">
                                <a href="#" class="btn-readmore">+ Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img class="bg-img" src="{{ asset('images/services/service-5.jpg') }}" alt="Ảnh nền">

                        <div class="service-content">
                            <div class="service-default">
                                <img class="service-icon" src="{{ asset('images/icons/icon-9.png') }}" alt="Icon">
                                <h3 class="service-title">Cải tạo nhà ở</h3>
                                <p class="service-desc">Cải tạo toàn diện từ công năng đến thẩm mỹ, làm mới không gian sống
                                    theo cách bạn mong muốn
                                </p>
                            </div>

                            <div class="service-hover">
                                <a href="#" class="btn-readmore">+ Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img class="bg-img" src="{{ asset('images/services/service-6.jpg') }}" alt="Ảnh nền">

                        <div class="service-content">
                            <div class="service-default">
                                <img class="service-icon" src="{{ asset('images/icons/icon-10.png') }}" alt="Icon">
                                <h3 class="service-title">Xây dựng Shophouse</h3>
                                <p class="service-desc">Thiết kế shophouse hài hòa giữa ở và kinh doanh - tối ưu không
                                    gian, tăng giá trị khai thác
                                </p>
                            </div>

                            <div class="service-hover">
                                <a href="#" class="btn-readmore">+ Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quy trình thiết kế và thi công -->
    <section class="construction-process">
        <div class="section-heading">
            <h2>QUY TRÌNH THI CÔNG CỦA CHÚNG TÔI</h2>
        </div>

        <div class="process-step">
            <img src="{{ asset('images/icons/icon-11.png') }}" alt="Trao đổi tư vấn">
            <h3>TRAO ĐỔI TƯ VẤN</h3>
            <p>Trao đổi yêu cầu, tư vấn định hướng ý tưởng, phong cách và mức đầu tư</p>
        </div>
        <div class="process-step">
            <img src="{{ asset('images/icons/icon-12.png') }}" alt="Báo giá quy trình">
            <h3>BÁO GIÁ QUY TRÌNH</h3>
            <p>Gửi khách hàng báo giá theo đúng gói thiết kế mà Khách Hàng đang đề cập, kèm quy trình làm việc cụ thể, chi
                tiết</p>
        </div>
        <div class="process-step">
            <img src="{{ asset('images/icons/icon-13.png') }}" alt="Ký hợp đồng">
            <h3>KÝ HỢP ĐỒNG</h3>
            <p>Thực hiện các thủ tục hành chính và bắt đầu triển khai các công việc theo tiến độ thống nhất</p>
        </div>
        <div class="process-step">
            <img src="{{ asset('images/icons/icon-14.png') }}" alt="Bàn giao & quyết toán">
            <h3>BÀN GIAO & QUYẾT TOÁN</h3>
            <p>Sau khi thống nhất hồ sơ báo cáo tiến độ, khách hàng thanh toán lần cuối giá trị HĐ còn lại trước khi nhận hồ
                sơ hoàn chỉnh.</p>
        </div>
    </section>


    <!-- Kết thúc quy trình thiết kế và thi công -->

    <!-- Facts Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('images/icons/icon-2.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3">Phương pháp Thiết kế</h3>
                        <p class="mb-0">Chúng tôi áp dụng phương pháp thiết kế sáng tạo, đảm bảo sự độc đáo và phù hợp với
                            nhu cầu khách hàng.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=" Ascendant">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('images/icons/icon-3.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3">Giải pháp Sáng tạo</h3>
                        <p class="mb-0">Cung cấp các giải pháp kiến trúc và thiết kế nội thất đột phá, đáp ứng mọi yêu
                            cầu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('images/icons/icon-4.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3">Quản lý Dự án</h3>
                        <p class="mb-0">Đảm bảo tiến độ và chất lượng dự án với quy trình quản lý chuyên nghiệp.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts End -->

    <!-- Wrapper cho khu vực thư viện mẫu nhà -->
    <!-- Banner AI Section -->
    <div class="container-fluid px-0">
        <a href="#">
            <img src="{{ asset('images/banners/bannerAI.png') }}" alt="Banner AI" class="img-fluid w-100">
        </a>
    </div>

    <!-- Slider mẫu nhà đẹp -->
    <div class="container py-5">
        <h1 class="text-center fw-bold py-4 text-danger">1000+ MẪU THIẾT KẾ NHÀ ĐẸP Ở VIỆT NAM</h1>

        <div class="swiper house-swiper">
            <div class="swiper-wrapper">
                <!-- Mỗi mẫu nhà -->
                @foreach ($f1data as $product)
                    <div class="swiper-slide py-3">
                        <div class="house-card">
                            <div class="image-container position-relative ratio ratio-1x1 overflow-hidden">
                                <a href="{{ route('detailProduct', $product->slug) }}">
                                    <img src="{{ asset('uploads/products/' . $product->image) }}"
                                        alt="{{ $product->slug }}"
                                        class="img-fluid rounded w-100 h-100 object-fit-contain">
                                </a>
                            </div>

                            <p class="house-title text-center mt-2 fw-semibold">{{ $product->name }}</p>
                        </div>
                    </div>
                @endforeach

                <!-- Thêm nhiều mẫu tương tự ở đây -->
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next fs-4"></div>
            <div class="swiper-button-prev fs-4"></div>
        </div>

        <div class="swiper house-swiper mt-4">
            <div class="swiper-wrapper">
                <!-- Mỗi mẫu nhà -->
                @foreach ($f2data as $product)
                    <div class="swiper-slide">
                        <div class="house-card">
                            <div class="image-container position-relative ratio ratio-1x1 overflow-hidden">
                                <a href="{{ route('detailProduct', $product->slug) }}">
                                    <img src="{{ asset('uploads/products/' . $product->image) }}"
                                        alt="{{ $product->slug }}"
                                        class="img-fluid rounded w-100 h-100 object-fit-contain">
                                </a>
                            </div>
                            <p class="house-title text-center mt-2 fw-semibold">{{ $product->name }}</p>
                        </div>
                    </div>
                @endforeach
                <!-- Thêm nhiều mẫu tương tự ở đây -->
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next fs-4"></div>
            <div class="swiper-button-prev fs-4"></div>
        </div>
    </div>


    <!-- Dự án -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
                <h4 class="section-title">Dự án tiêu biểu của chúng tôi</h4>
                {{-- <h1 class="display-5 mb-4">Tham quan các Dự án Mới nhất và Công trình Sáng tạo của Chúng tôi</h1> --}}
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Khu phức hợp Hiện đại</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Khách sạn Hoàng gia</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Tòa nhà Mexwel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill"
                            data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Trung tâm Mua sắm</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('images/projects/project-1.jpg') }}" style="object-fit: cover;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">7 Năm Kinh nghiệm trong Ngành Kiến trúc</h1>
                                    <p class="mb-4">Chúng tôi mang đến các giải pháp kiến trúc sáng tạo, đáp ứng mọi nhu
                                        cầu của khách hàng.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Phương pháp Thiết kế</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Giải pháp Sáng tạo</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Quản lý Dự án</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('images/projects/project-2.jpg') }}" style="object-fit: cover;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Năm Kinh nghiệm trong Ngành Kiến trúc</h1>
                                    <p class="mb-4">Chúng tôi mang đến các giải pháp kiến trúc sáng tạo, đáp ứng mọi nhu
                                        cầu của khách hàng.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Phương pháp Thiết kế</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Giải pháp Sáng tạo</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Quản lý Dự án</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('images/projects/project-3.jpg') }}" style="object-fit: cover;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Năm Kinh nghiệm trong Ngành Kiến trúc</h1>
                                    <p class="mb-4">Chúng tôi mang đến các giải pháp kiến trúc sáng tạo, đáp ứng mọi nhu
                                        cầu của khách hàng.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Phương pháp Thiết kế</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Giải pháp Sáng tạo</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Quản lý Dự án</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('images/projects/project-4.jpg') }}" style="object-fit: cover;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Năm Kinh nghiệm trong Ngành Kiến trúc</h1>
                                    <p class="mb-4">Chúng tôi mang đến các giải pháp kiến trúc sáng tạo, đáp ứng mọi nhu
                                        cầu của khách hàng.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Phương pháp Thiết kế</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Giải pháp Sáng tạo</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Quản lý Dự án</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->



    <!-- Bảng giá xây nhà + khuyến mãi countdown -->
    <div class="container-xxl py-5">
        <h1 class="text-center fw-bold py-4 text-danger">LIÊN HỆ XÂY NHÀ TRỌN GÓI NHÀ ĐẸP</h1>
        <p class="text-center text-muted">Chi phí xây nhà dựa vào nhiều yếu tố vật liệu, diện tích. Nhưng thiết kế tại
            Nhà Đẹp cam kết giá tốt nhất!</p>

        @if (session('success'))
            <div class="alert alert-success text-center fw-bold rounded-pill">
                {{ session('success') }}
            </div>
        @endif


        <div class="row g-4 mt-4 justify-content-center ">
            <!-- Right Box -->
            <div class="col-lg-6">
                <h2 class="text-center text-danger fw-bold">Khuyến mãi Xây nhà năm mới 2025</h2>
                <div class="row g-2 justify-content-center my-3">
                    <div class="col-3">
                        <div class="bg-dark text-white text-center px-2 py-2 rounded-4">
                            <div class="fs-4 fw-bold" id="days">0</div><small>NGÀY</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-dark text-white text-center px-2 py-2 rounded-4">
                            <div class="fs-4 fw-bold" id="hours">0</div><small>GIỜ</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-dark text-white text-center px-2 py-2 rounded-4">
                            <div class="fs-4 fw-bold" id="minutes">0</div><small>PHÚT</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-dark text-white text-center px-2 py-2 rounded-4">
                            <div class="fs-4 fw-bold" id="seconds">0</div><small>GIÂY</small>
                        </div>
                    </div>
                </div>
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
                    <img src="{{ asset('images/banners/khuyen-mai.jpg') }}" alt="Khuyến mãi xây nhà trúng xe"
                        class="img-fluid object-fit-cover">
                </div>
            </div>

            <!-- Left Box -->
            <div class="col-lg-4">
                <div class="bg-danger p-4 rounded-4 shadow-sm text-white">
                    <h6 class="fw-bold text-white text-center">Điền thông tin nhận báo giá và khuyến mãi!</h6>
                    <div class="d-flex align-items-center fs-2 fw-bold my-3">
                        <i class="fas fa-phone-alt me-2"></i>Liên hệ: 086631933
                    </div>
                    <hr>
                     <p class="text-white-50 small">Để lại thông tin để được chuyên viên NHÀ ĐẸP sẽ liên hệ ngay trong
                        ít
                        phút!</p>
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="py-2">
                            <input type="text"class="error-message" data-error-for="name" name="name"
                                class="form-control form-control-lg rounded-3"
                                style="background-color: white; font-size: 1.5rem;" placeholder="Họ và tên" required>
                        </div>
                        <div class="py-2">
                            <input type="tel" class="error-message" data-error-for="phone" name="phone"
                                class="form-control form-control-lg rounded-3"
                                style="background-color: white; font-size: 1.5rem;" placeholder="Số điện thoại"
                                pattern="[0-9]{10,11}" required>
                        </div>

                        <div class="py-2">
                            <input type="text" class="error-message" data-error-for="address" name="address"
                                class="form-control form-control-lg rounded-3"
                                style="background-color: white; font-size: 1.5rem;" placeholder="Địa chỉ xây dựng?"
                                required>
                        </div>
                        <div class="py-2">
                            <select name="house_type"  class="error-message"
                                class="form-select form-select-lg rounded-3 " style=" background-color: white;font-size: 1.5rem;"
                                required>
                                <option value="" disabled selected>-- Chọn loại nhà để nhận báo giá --</option>
                                <option>Nhà cấp 4</option>
                                <option>Nhà phố hiện đại</option>
                                <option>Biệt thự</option>
                                <option>Nhà phố thương mại (Shophouse)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 rounded-pill fw-bold shadow-sm"
                            style="font-size: 1.5rem; height:50px; margin-top: 10px;">
                            NHẬN BÁO GIÁ XÂY NHÀ
                        </button>
                    </form>

                </div>
            </div>


        </div>
    </div>



    {{-- <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Đặt lịch hẹn</h4>
                    <h1 class="display-5 mb-4">Đặt lịch hẹn để bắt đầu Dự án Mơ ước của Bạn</h1>
                    <p class="mb-4">Chúng tôi sẵn sàng hỗ trợ bạn thực hiện hóa ngôi nhà mơ ước với dịch vụ chuyên
                        nghiệp.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-email-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Gọi ngay</p>
                                    <h3 class="mb-0">+012 345 6789</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Gửi Email</p>
                                    <h3 class="mb-0">info@example.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Họ và Tên" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="Email của bạn"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Số điện thoại"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select class="form-select" style="height: 55px;">
                                <option selected>Chọn Dịch vụ</option>
                                <option value="1">Dịch vụ 1</option>
                                <option value="2">Dịch vụ 2</option>
                                <option value="3">Dịch vụ 3</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Chọn Ngày"
                                    data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Chọn Giờ"
                                    data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Tin nhắn"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Đặt lịch hẹn</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End --> --}}

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
                <h4 class="section-title">Nhận xét</h4>
                <h1 class="display-5 mb-4">Hàng ngàn khách hàng tin tưởng chúng tôi và dịch vụ của chúng tôi</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-1.jpg') }}' alt=''>">
                    <p class="fs-5">Dịch vụ tuyệt vời, đội ngũ chuyên nghiệp và tận tâm. Chúng tôi rất hài lòng với ngôi
                        nhà mới!</p>
                    <h3>Chị Giang</h3>
                    <span class="text-primary">Chủ nhà hàng</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-2.jpg') }}' alt=''>">
                    <p class="fs-5">Thiết kế sáng tạo và thi công đúng tiến độ. Tôi sẽ giới thiệu dịch vụ này cho bạn bè!
                    </p>
                    <h3>Anh Huy</h3>
                    <span class="text-primary">Nhà bất động sản</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('images/custommer/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Không gian sống của chúng tôi đã được nâng tầm nhờ đội ngũ của họ. Rất đáng tin cậy!
                    </p>
                    <h3>ông Hùng</h3>
                    <span class="text-primary">Quân nhân về hưu</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Swiper CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.house-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    992: {
                        slidesPerView: 4
                    }
                },
                observer: true,
                observeParents: true,
                on: {
                    init: function() {
                        this.update();
                    }
                }
            });



            //liên hệ báo giá
            const form = document.querySelector('form');
            if (!form) return;

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const successImg = "{{ asset('images/icons/success.png') }}";
                const formData = new FormData(form);

                // Reset error messages
                form.querySelectorAll('.error-message').forEach(div => {
                    div.textContent = '';
                });

                const submitButton = form.querySelector('[type="submit"]');
                if (submitButton) submitButton.disabled = true;

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: formData
                    })
                    .then(function(response) {
                        if (!response.ok) {
                            if (response.status === 422) {
                                return response.json().then(function(data) {
                                    const errors = data.errors;

                                    for (let field in errors) {
                                        const errorDiv = form.querySelector(
                                            `.error-message[data-error-for="${field}"]`);
                                        if (errorDiv) {
                                            errorDiv.textContent = errors[field].join(', ');
                                        }
                                    }

                                    Swal.fire({
                                        icon: 'error',
                                        title: '❌ Lỗi dữ liệu!',
                                        text: 'Vui lòng kiểm tra lại thông tin bạn đã nhập.'
                                    });
                                });
                            }
                            throw new Error('Đã có lỗi xảy ra khi gửi dữ liệu');
                        }
                        return response.json();
                    })
                    .then(function(data) {
                        if (!data) return;

                        Swal.fire({
                            title: '🎉 Gửi thành công!',
                            text: data.message,
                            imageUrl: successImg,
                            imageWidth: 100,
                            imageHeight: 100,
                            confirmButtonText: 'OK'
                        });

                        form.reset();
                    })
                    .catch(function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: '❌ Lỗi',
                            text: error.message
                        });
                    })
                    .finally(function() {
                        if (submitButton) submitButton.disabled = false;
                    });
            });



        });
    </script>
@endsection
