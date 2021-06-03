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
                            <p><a href="/#datlich" class="btn btn-primary">Đặt lịch ngay</a></p>
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
                            <p><a href="/#datlich" class="btn btn-primary">Đặt lịch ngay</a></p>
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

            @foreach( $serviceslist as $sv)
                <div class="col-md-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-car-service"></span>
                        </div>
                        <div class="media-body pl-3">
                            <a href="/services_detail/{{$sv->id}}"><h3 class="heading">{{$sv->name}}</h3></a>
                            <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;">
                                {{$sv->short_description}}</p>
                            <p><a href="/services_detail/{{$sv->id}}" class="btn-custom">Đọc thêm</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('giaodien.layouts.booking')
{{--<section class="ftco-section bg-light">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center pb-5 mb-3">--}}
{{--            <div class="col-md-7 heading-section text-center ftco-animate">--}}

{{--                <h2>Tin tức</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            @foreach($news as $tin)--}}
{{--            <div class="col-md-6 col-lg-3 ftco-animate">--}}
{{--                <div class="block-7">--}}
{{--                    <div class="text-center">--}}
{{--                        <span class="excerpt d-block">{{$tin->title}}</span>--}}
{{--                        <span class="price"><sup></sup> <a href="/contact"><span class="number">Liên hệ</span></a></span>--}}

{{--                        <div class="pricing-text">--}}
{{--                            <p>{{$tin->short_description}}</p>--}}
{{--                        </div>--}}

{{--                        <a href="/news_detail/{{$tin->id}}" class="btn btn-secondary d-block px-2 py-3">Xem chi tiết</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- footer -->
@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
