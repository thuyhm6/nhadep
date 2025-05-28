@extends('layouts.app') {{-- //Cần check chỗ này --}}
@section('title', 'Về chúng tôi')
@section('content')


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
                <h4 class="section-title">Về chúng tôi</h4>
                <h1 class="display-5 mb-4">Cơ quan Kiến trúc Sáng tạo cho Ngôi nhà Mơ ước của Bạn</h1>
                <p>Chúng tôi cung cấp các dịch vụ thiết kế và thi công chuyên nghiệp, mang đến không gian sống hoàn hảo.
                </p>
                <p class="mb-4">Với đội ngũ chuyên gia giàu kinh nghiệm, chúng tôi cam kết mang lại sự hài lòng tối đa
                    cho khách hàng.</p>
                <div class="d-flex align-items-center mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                        style="width: 120px; height: 120px;">
                        <h1 class="display-1 mb-n2" data-toggle="counter-up">25</h1>
                    </div>
                    <div class="ps-4">
                        <h3>Năm</h3>
                        <h3>Kinh nghiệm</h3>
                        <h3 class="mb-0">Hoạt động</h3>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5" href="">Tìm hiểu thêm</a>
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
                <h4 class="section-title">Tại sao chọn chúng tôi!</h4>
                <h1 class="display-5 mb-4">Tại sao bạn nên tin tưởng chúng tôi? Tìm hiểu thêm về chúng tôi!</h1>
                <p class="mb-4">Chúng tôi cam kết mang đến những giải pháp kiến trúc và thiết kế nội thất chất lượng
                    cao, đáp ứng mọi nhu cầu của bạn.</p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="{{ asset('images/icons/icon-2.png') }}" alt="Icon">
                            <div class="ms-4">
                                <h3>Phương pháp Thiết kế</h3>
                                <p class="mb-0">Sáng tạo và độc đáo, phù hợp với từng khách hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="{{ asset('images/icons/icon-3.png') }}" alt="Icon">
                            <div class="ms-4">
                                <h3>Giải pháp Sáng tạo</h3>
                                <p class="mb-0">Đột phá trong thiết kế và thi công.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="{{ asset('images/icons/icon-4.png') }}" alt="Icon">
                            <div class="ms-4">
                                <h3>Quản lý Dự án</h3>
                                <p class="mb-0">Quy trình chuyên nghiệp, đảm bảo tiến độ và chất lượng.</p>
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
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1200px;">
            <h4 class="section-title">Thành viên Đội ngũ</h4>
            <h1 class="display-5 mb-4">Chúng tôi là Đội ngũ Kiến trúc Sáng tạo cho Ngôi nhà Mơ ước của Bạn</h1>
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
                        <h3 class="mt-2">Tên Kiến trúc sư</h3>
                        <span class="text-primary">Chức vụ</span>
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
                        <h3 class="mt-2">Tên Kiến trúc sư</h3>
                        <span class="text-primary">Chức vụ</span>
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
                        <h3 class="mt-2">Tên Kiến trúc sư</h3>
                        <span class="text-primary">Chức vụ</span>
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
                        <h3 class="mt-2">Tên Kiến trúc sư</h3>
                        <span class="text-primary">Chức vụ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection