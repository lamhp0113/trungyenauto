<!DOCTYPE html>
<html lang="en">
<head>
    @include('giaodien.layouts.style')
</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category')
<div class="container">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Gara Trung Yên</span>
            <?php
            $desired_object = $cate->first(function($item) {
                return $item->id == request()->id;
            });
            ?>
            <h2>Các dịch vụ về {{ $desired_object->name }}</h2>
        </div>
    </div>
    <div class="row">
        @foreach($services as $sv)
            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-car-service"></span>
                    </div>
                    <div class="media-body pl-3">
                        <a href="#"><h3 class="heading">{{$sv->name}}</h3></a>
                        <p>{{$sv->short_description}}.</p>
                        <p><a href="/services_detail/{{$sv->id}}" class="btn-custom">Đọc thêm</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<!-- footer -->
@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
