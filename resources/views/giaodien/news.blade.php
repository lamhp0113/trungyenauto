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
<br>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($news as $tt)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset($tt->image?$tt->image:'images/no_image.jpg')}});">
                    </a>
                    <div class="text mt-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author" style="background-image: url({{asset('images/logo.jpg);')}}"></div>
                            <div class="desc pl-3">
                                <span>Trung Yên Auto</span>
                                <span>{{$tt->created_at}}</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="/news_detail/{{$tt->id}}">{{$tt->title}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {!! $news->links('pagination::bootstrap-4') !!}
    </div>
</section>


@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
