<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auto Repair - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('giaodien.layouts.style')

</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category')

<div class="container">
    <div class="row">
        <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$services->name}}</h2>
            <p>{{$services->short_description}}</p>
            @if(!empty($services->images))
                <p>
                    <img src="{{asset($news->images)}}" alt="" class="img-fluid">
                </p>
            @endif
            <p>{!! html_entity_decode($services->long_description, ENT_QUOTES, 'UTF-8') !!}</p>
        </div>
        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <div class="categories">
                    <h3>Dịch vụ khác</h3>

                    @foreach($serviceslist as $sv)
                    <li><a href="/services_detail/{{$sv->id}}">{{$sv->name}} <span class="fa fa-chevron-right"></span></a></li>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>



@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
