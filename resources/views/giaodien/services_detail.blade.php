<!DOCTYPE html>
<html lang="en">
<head>

    @include('giaodien.layouts.style')
</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category', ['isDisplayBooking' => true])
<div class="container">
    <div class="row">
        <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$service->name}}</h2>
            @if(!empty($service->images))
                <p>
                    <img src="{{asset($service->images)}}" alt="" class="img-fluid">
                </p>
            @endif
            <p>{!! html_entity_decode($service->long_description, ENT_QUOTES, 'UTF-8') !!}</p>
        </div>
        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <div class="categories">
                    <h3>Dịch vụ khác</h3>
                    @foreach($serviceslist as $sv)
                        <li><a href="/services_detail/{{$sv->id}}">{{$sv->name}} <span
                                    class="fa fa-chevron-right"></span></a></li>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@include('giaodien.layouts.booking', ['selectedServiceId' => $service->id])
@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
