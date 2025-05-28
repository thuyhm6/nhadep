<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- SEO HEAD chuẩn -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Xây nhà đẹp, thiết kế nhà đẹp, thi công nhà đẹp, xây dựng nhà đẹp')">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta name="author" content="quyendau">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="@yield('meta_image', asset('default.jpg'))">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <link rel="icon" href="{{ asset('images/icons/logo_nhadep.png') }}" type="image/png">


    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">

    <!-- Libraries CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- Font Awesome 6.5 (latest free CDN version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="gradient-bg">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <!-- <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div> -->
        <img class="position-absolute top-50 start-50 translate-middle"
            src="{{ asset('images/icons/logo-ngang.png') }}" alt="Icon">
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-00 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0866319333">
                        <i class="fa fa-phone text-primary me-2"></i>0866 319 333
                    </a>
                    <a class="text-body px-2" href="mailto:info@example.com">
                        <i class="fa fa-envelope-open text-primary me-2"></i>kientructhuongluu@gmail.com
                    </a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="#">Điều khoản</a>
                    <a class="text-body px-2" href="#">Chính sách</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1"
                        href="https://www.facebook.com/kientrucnhadepvietdotcom"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1"
                        href="https://www.youtube.com/channel/UCzUgK4G6E2U0vI9pHVC_nYA"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://www.tiktok.com/@tongthaunhadep"><i
                            class="fab fa-tiktok"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Topbar End -->
    <!-- Navbar Start -->
    @php
        $isMauNhaActive = request()->routeIs(
            'home.features',
            'home.team',
            'home.appointment',
            'home.project',
            'home.testimonial',
        );
        $isChiPhiActive = request()->routeIs('home.services'); // Sửa đổi
        $isKinhNghiemActive = request()->routeIs('home.services'); // Sửa đổi
    @endphp

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="{{ route('home.index') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">
                <img class="me-3" src="{{ asset('images/icons/logo-ngang.png') }}" alt="Icon">
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home.index') }}"
                    class="nav-item nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{ route('home.about') }}"
                    class="nav-item nav-link {{ request()->routeIs('home.about') ? 'active' : '' }}">Giới thiệu</a>

                <div class="nav-item dropdown">
                    <a href="{{ route('house.list') }}"
                        class="nav-link dropdown-toggle {{ $isMauNhaActive ? 'active' : '' }}">
                        CÁC MẪU NHÀ ĐẸP
                    </a>
                    @php
                        use App\Models\Category;
                        $categories = Category::all();
                    @endphp
                    <div class="dropdown-menu border-0 m-0">
                        @foreach ($categories as $cat)
                            <a href="{{ route('house.list', ['mau_nha' => $cat->slug]) }}" class="dropdown-item ">
                                {{ $cat->name }}
                            </a>
                        @endforeach
                    </div>
                </div>


                <div class="nav-item dropdown">
                    <a href="{{ route('home.calculate') }}" class="nav-link   " {{-- {{ $isChiPhiActive ? 'active' : '' }}  --}}
                        {{--  data-bs-toggle="dropdown" --}}>Tính chi phí</a>
                    {{-- <div class="dropdown-menu border-0 m-0">
                        <a href="{{ route('home.team') }}" class="dropdown-item">Chi phí kiến trúc</a>
                        <a href="{{ route('home.appointment') }}" class="dropdown-item">Chí phí nội thất</a>
                        <a href="{{ route('home.features') }}" class="dropdown-item">Chí phí thi công</a>
                    </div> --}}
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $isKinhNghiemActive ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Chia sẻ kinh nghiệm</a>
                     @php
                        use App\Models\CategoryPost;
                        $categories = CategoryPost::all();
                    @endphp
                    <div class="dropdown-menu border-0 m-0">
                        @foreach ($categories as $cat)
                            <a href="{{ route('post.list', ['mau_nha' => $cat->slug]) }}" class="dropdown-item ">
                                {{ $cat->name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="{{ route('home.contact') }}"
                    class="nav-item nav-link {{ request()->routeIs('home.contact') ? 'active' : '' }}">Liên hệ</a>
            </div>
            <a href="#" class="btn btn-primary fs-4 py-2 px-4 d-none d-lg-block">Đặt lịch hẹn</a>
        </div>
    </nav>

    <!-- Navbar End -->

    @yield('content')


    {{-- Thông tin mxh --}}

    <div class="position-fixed end-0 top-50 translate-middle-y me-3" style="z-index: 9999;">
        <div class="d-flex flex-column align-items-center gap-3">
            <!-- Vị trí -->
            <a title="Xem bản đồ"
                href="https://www.google.com/maps/place/T%E1%BB%95ng+Th%E1%BA%A7u+Thi%E1%BA%BFt+K%E1%BA%BF+Thi+C%C3%B4ng+Tr%E1%BB%8Dn+G%C3%B3i+Nh%C3%A0+%C4%90%E1%BA%B9p/@19.7792738,105.7776457,17z/data=!3m1!4b1!4m6!3m5!1s0x3136f988f7a1352f:0xa2b81d240c1df229!8m2!3d19.7792738!4d105.780226!16s%2Fg%2F11y8jf7nrt?entry=ttu&g_ep=EgoyMDI1MDUwNy4wIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D"
                data-bs-toggle="tooltip" data-bs-placement="left" class="btn btn-circle btn-lg shadow "
                style="background-color: #00bcd4;">
                <i class="fas fa-map-marker-alt text-white"></i>
            </a>
            <!-- Gọi điện -->
            <a title="Gọi điện" href="tel:0123456789" class="btn btn-circle btn-lg shadow "
                style="background-color: #4caf50;">
                <i class="fas fa-phone-alt text-white"></i>
            </a>
            <!-- Zalo -->
            <a title="Nhắn zalo" href="https://zalo.me/lengocanh" data-bs-toggle="tooltip" data-bs-placement="left"
                class="btn btn-circle btn-lg shadow " style="background-color: #039be5;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/48px-Icon_of_Zalo.svg.png"
                    alt="Zalo" width="20">
            </a>
            <!-- Messenger -->
            <a title="Chat Messenger" href="https://www.facebook.com/kientrucnhadepvietdotcom"
                data-bs-toggle="tooltip" data-bs-placement="left" class="btn btn-circle btn-lg shadow "
                style="background-color: #1877f2;">
                <i class="fab fa-facebook-messenger text-white"></i>
            </a>
        </div>
    </div>

    <hr class="mt-5 text-secondary" />
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Địa chỉ</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Đông Vệ, Thanh Hóa</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>0866 319 333</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>lengocanh.design@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href="#"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="#"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Dịch vụ</h3>
                    <a class="btn btn-link" href="#">Thiết kế kiến trúc</a>
                    <a class="btn btn-link" href="#">Dựng phối cảnh 3D</a>
                    <a class="btn btn-link" href="#">Quy hoạch nhà</a>
                    <a class="btn btn-link" href="#">Thiết kế nội thất</a>
                    <a class="btn btn-link" href="#">Thi công trọn gói</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Liên kết nhanh</h3>
                    <a class="btn btn-link" href="#">Giới thiệu</a>
                    <a class="btn btn-link" href="#">Liên hệ</a>
                    <a class="btn btn-link" href="#">Dịch vụ</a>
                    <a class="btn btn-link" href="#">Điều khoản</a>
                    <a class="btn btn-link" href="#">Hỗ trợ</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Đăng ký nhận tin</h3>
                    <p>Hãy để lại email để nhận thông tin mới nhất từ chúng tôi.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Nhập email của bạn">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">quyendau</a>. Đã đăng ký bản quyền.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Thiết kế bởi <a href="https://thuyhm.info.vn">ThuyHM</a><br>
                        Phân phối bởi: <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <div id="scrollTop" class="visually-hidden end-0"></div>
    <div class="page-overlay"></div>

    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @stack('scripts');
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Template Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Icon mxh
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
            new bootstrap.Tooltip(el);
        });
    </script>
</body>

</html>
