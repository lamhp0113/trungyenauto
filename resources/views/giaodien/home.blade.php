<!DOCTYPE html>
<html lang="en">
<head>
    @include('giaodien.layouts.style')
</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category', ['isDisplayBooking' => true])

<!-- END nav -->
<div class="hero-wrap">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{asset('images/background/bg01.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start">
                    <div class="col-md-6 ftco-animate">
                        <div class="text w-100">
                            <h2>Chúng tôi có đội ngũ kỹ thuật giàu kinh nghiệm</h2>
                            <h1 class="mb-4">Đã đến thời gian bảo dưỡng?</h1>
                            <p><a href="#" class="btn btn-primary">Đặt lịch ngay</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{asset('images/background/bg03.jpeg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start">
                    <div class="col-md-6 ftco-animate">
                        <div class="text w-100">
                            <h2>Chúng tôi quan tâm đến từng chi tiết nhỏ</h2>
                            <h1 class="mb-4">Tăng tuổi thọ của xe</h1>
                            <p><a href="#datlich" class="btn btn-primary">Đặt lịch ngay</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Gara Trung Yên</span>
                <h2>Các dịch vụ chính</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-car-service"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">Bão dưỡng ô tô định kỳ</h3></a>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-tyre"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">Đại tu động cơ ô tô</h3></a>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-battery"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">Bão dưỡng ô tô định kỳ</h3></a>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-car-engine"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">Bão dưỡng ô tô định kỳ</h3></a>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-tow-truck"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">Bão dưỡng ô tô định kỳ</h3></a>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-repair"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">Bão dưỡng ô tô định kỳ</h3></a>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('giaodien.layouts.booking')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Price &amp; Plans</span>
                <h2>Pricing</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">First PMS</span>
                        <span class="price"><sup>$</sup> <span class="number">78.98</span></span>

                        <div class="pricing-text">
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>

                        <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Engine Diagnostics</span>
                        <span class="price"><sup>$</sup> <span class="number">83.75</span></span>

                        <div class="pricing-text">
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>

                        <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Tow Truck</span>
                        <span class="price"><sup>$</sup> <span class="number">85.00</span></span>

                        <div class="pricing-text">
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>

                        <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <span class="excerpt d-block">Car Wash</span>
                        <span class="price"><sup>$</sup> <span class="number">30.50</span></span>

                        <div class="pricing-text">
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>

                        <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
