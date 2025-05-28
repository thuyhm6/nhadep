@extends('layouts.app') {{-- //Cần check chỗ này --}}
@section('title', 'Liên hệ')
@section('content')




    <!-- Bắt đầu Liên hệ -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="section-title">Liên hệ với chúng tôi</h1>
                <h5 class="display-5 mb-4">Nếu bạn có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi</h5>
            </div>
            <div class="row g-5 py-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Địa chỉ</p>
                                <h3 class="mb-0">LK 14 - Khu Đô Thị FLC ECOHOUSE Thanh Hóa</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Gọi ngay</p>
                                <h3 class="mb-0">0866 319 333</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Gửi email ngay</p>
                                <h3 class="mb-0">kientructhuongluu@gmail.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Tên của bạn">
                                    <label for="name">Tên của bạn</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email của bạn">
                                    <label for="email">Email của bạn</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Chủ đề">
                                    <label for="subject">Chủ đề</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Để lại tin nhắn tại đây" id="message" name="message"
                                        style="height: 100px; font-size: 1.5rem; padding-top: 20px !important;"></textarea>
                                    <label for="message">Tin nhắn</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Gửi tin nhắn</button>
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
