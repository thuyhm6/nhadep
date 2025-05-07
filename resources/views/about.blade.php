@extends('layouts.app') {{-- //Cần check chỗ này --}}
@section('title', 'Về chúng tôi')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <h1 class="display-1 text-white animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase mb-0">
              <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
              <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
          </ol>
      </nav>
  </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="about-img">
                  <img class="img-fluid" src="{{ asset('images/about-1.jpg') }}" alt="">
                  <img class="img-fluid" src="{{ asset('images/about-2.jpg') }}" alt="">
              </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
              <h4 class="section-title">About Us</h4>
              <h1 class="display-5 mb-4">A Creative Architecture Agency For Your Dream Home</h1>
              <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
              <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
              <div class="d-flex align-items-center mb-5">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                      <h1 class="display-1 mb-n2" data-toggle="counter-up">25</h1>
                  </div>
                  <div class="ps-4">
                      <h3>Years</h3>
                      <h3>Working</h3>
                      <h3 class="mb-0">Experience</h3>
                  </div>
              </div>
              <a class="btn btn-primary py-3 px-5" href="">Read More</a>
          </div>
      </div>
  </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <h4 class="section-title">Why Choose Us!</h4>
              <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
              <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
              <div class="row g-4">
                  <div class="col-12">
                      <div class="d-flex align-items-start">
                          <img class="flex-shrink-0" src="{{ asset('images/icons/icon-2.png') }}" alt="Icon">
                          <div class="ms-4">
                              <h3>Design Approach</h3>
                              <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="d-flex align-items-start">
                          <img class="flex-shrink-0" src="{{ asset('images/icons/icon-3.png') }}" alt="Icon">
                          <div class="ms-4">
                              <h3>Innovative Solutions</h3>
                              <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="d-flex align-items-start">
                          <img class="flex-shrink-0" src="{{ asset('images/icons/icon-4.png') }}" alt="Icon">
                          <div class="ms-4">
                              <h3>Project Management</h3>
                              <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="feature-img">
                  <img class="img-fluid" src="{{ asset('images/about-2.jpg') }}" alt="">
                  <img class="img-fluid" src="{{ asset('images/about-1.jpg') }}" alt="">
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Feature End -->


<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h4 class="section-title">Team Members</h4>
          <h1 class="display-5 mb-4">We Are Creative Architecture Team For Your Dream Home</h1>
      </div>
      <div class="row g-0 team-items">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item position-relative">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('images/team-1.jpg') }}" alt="">
                      <div class="team-social text-center">
                          <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="bg-light text-center p-4">
                      <h3 class="mt-2">Architect Name</h3>
                      <span class="text-primary">Designation</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item position-relative">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('images/team-2.jpg') }}" alt="">
                      <div class="team-social text-center">
                          <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="bg-light text-center p-4">
                      <h3 class="mt-2">Architect Name</h3>
                      <span class="text-primary">Designation</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item position-relative">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('images/team-3.jpg') }}" alt="">
                      <div class="team-social text-center">
                          <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="bg-light text-center p-4">
                      <h3 class="mt-2">Architect Name</h3>
                      <span class="text-primary">Designation</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item position-relative">
                  <div class="position-relative">
                      <img class="img-fluid" src="{{ asset('images/team-4.jpg') }}" alt="">
                      <div class="team-social text-center">
                          <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="bg-light text-center p-4">
                      <h3 class="mt-2">Architect Name</h3>
                      <span class="text-primary">Designation</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Team End -->

@endsection