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

                <h2 class="mb-3">{{$news->title}}</h2>
                <p>{{$news->short_description}}</p>
               @if(!empty($news->image))
                    <p>
                        <img src="{{asset($news->image)}}" alt="" class="img-fluid">
                    </p>
                @endif
                <p>{!! html_entity_decode($news->content, ENT_QUOTES, 'UTF-8') !!}</p>
            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Services</h3>
                        <li><a href="#">Oil Change <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Batteries &amp; Brake Check <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Tow Truck <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Tire Change <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Engine Repair<span class="fa fa-chevron-right"></span></a></li>
                    </div>
                </div>
            </div>

        </div>
    </div>


@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
