@extends('layouts.app') {{-- //Cần check chỗ này --}}
@section('title', 'Liên hệ')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <h1 class="display-1 text-white animated slideInDown">Contact Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb text-uppercase mb-0">
              <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
              <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
          </ol>
      </nav>
  </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h4 class="section-title">Contact Us</h4>
          <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
      </div>
      <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="d-flex flex-column justify-content-between h-100">
                  <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                          <i class="fa fa-map-marker-alt text-primary"></i>
                      </div>
                      <div class="ms-4">
                          <p class="mb-2">Address</p>
                          <h3 class="mb-0">Đông Vệ, Thanh Hóa</h3>
                      </div>
                  </div>
                  <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                          <i class="fa fa-phone-alt text-primary"></i>
                      </div>
                      <div class="ms-4">
                          <p class="mb-2">Call Us Now</p>
                          <h3 class="mb-0">+012 345 6789</h3>
                      </div>
                  </div>
                  <div class="bg-light d-flex align-items-center w-100 p-4">
                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                          <i class="fa fa-envelope-open text-primary"></i>
                      </div>
                      <div class="ms-4">
                          <p class="mb-2">Mail Us Now</p>
                          <h3 class="mb-0">info@example.com</h3>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://thuyhm.info.vn/contact-form">Download Now</a>.</p>
              <form>
                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="name" placeholder="Your Name">
                              <label for="name">Your Name</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-floating">
                              <input type="email" class="form-control" id="email" placeholder="Your Email">
                              <label for="email">Your Email</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="subject" placeholder="Subject">
                              <label for="subject">Subject</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                              <label for="message">Message</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<!-- Contact End -->


<!-- Google Map Start -->
<div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
  <iframe class="w-100 mb-n2" style="height: 450px;"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d663.6953461362301!2d105.7796643650631!3d19.779449387350354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f988f7a1352f%3A0xa2b81d240c1df229!2zVOG7lW5nIFRo4bqndSBUaGnhur90IEvhur8gVGhpIEPDtG5nIFRy4buNbiBHw7NpIE5ow6AgxJDhurlw!5e0!3m2!1svi!2s!4v1746177421680!5m2!1svi!2s"
      frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Google Map End -->

  @endsection