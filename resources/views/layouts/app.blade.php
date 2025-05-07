<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="author" content="ThuyHM6" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}"    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('lib/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack("styles")
</head>
<body class="gradient-bg">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <!-- <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div> -->
    <img class="position-absolute top-50 start-50 translate-middle" src="{{ asset('images/icons/logo-ngang.png') }}" alt="Icon">
  </div>
  <!-- Spinner End -->
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</a>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                <a class="text-body px-2" href="">Terms</a>
                <a class="text-body px-2" href="">Privacy</a>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
  </div>
  <!-- Topbar End -->
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0"><img class="me-3" src="{{ asset('images/icons/logo-ngang.png')}}" alt="Icon"></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="feature.html" class="dropdown-item">Our Features</a>
                    <a href="project.html" class="dropdown-item">Our Projects</a>
                    <a href="team.html" class="dropdown-item">Team Members</a>
                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Appointment</a>
    </div>
  </nav>
  <!-- Navbar End -->  
    
    @yield("content")
  
  
    <hr class="mt-5 text-secondary" />
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-light mb-4">Address</h3>
                  <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Đông Vệ, Thanh Hóa</p>
                  <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>0999 999 999</p>
                  <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                  <div class="d-flex pt-2">
                      <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-youtube"></i></a>
                      <a class="btn btn-square btn-outline-body me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-light mb-4">Services</h3>
                  <a class="btn btn-link" href="">Architecture</a>
                  <a class="btn btn-link" href="">3D Animation</a>
                  <a class="btn btn-link" href="">House Planning</a>
                  <a class="btn btn-link" href="">Interior Design</a>
                  <a class="btn btn-link" href="">Construction</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-light mb-4">Quick Links</h3>
                  <a class="btn btn-link" href="">About Us</a>
                  <a class="btn btn-link" href="">Contact Us</a>
                  <a class="btn btn-link" href="">Our Services</a>
                  <a class="btn btn-link" href="">Terms & Condition</a>
                  <a class="btn btn-link" href="">Support</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h3 class="text-light mb-4">Newsletter</h3>
                  <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                  <div class="position-relative mx-auto" style="max-width: 400px;">
                      <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid copyright">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a href="#"></a>, 
                  </div>
                  <div class="col-md-6 text-center text-md-end">
                      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://thuyhm.info.vn/credit-removal". Thank you for your support. ***/-->
                      Designed By <a href="https://thuyhm.info.vn">ThuyHM</a>
                      <br> Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
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
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
      $(function(){
        $("#search-input").on("keyup", function() {
          var searchKey = $(this).val();
          if(searchKey.length > 2) {
            $.ajax({
              type: "GET",
              url: "{{ route('home.search') }}",
              data: {query: searchKey},
              dataType: 'json',
              success: function(data) {
                $("#box-content-search").html('');
                $.each(data, function(index, item){
                  var url = "{{ route('shop.product.details', ['product_slug'=>'product_slug_pls']) }}";
                  var link = url.replace('product_slug_pls', item.slug);

                  $("#box-content-search").append(`
                    <li class="product-item gap14 mb-10">
                      <a href="${link}">
                        <div class="image no-bg">
                            <img src="{{ asset('uploads/products/thumbnails') }}/${item.image}" alt="${item.name}">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="${link}" class="body-text">${item.name}</a>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li class="mb-10">
                        <div class="divider"></div>
                    </li>
                  `);
                });
              }
            });
          }
        });
      })
    </script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @stack("scripts");
  </body>

</html>
