<!DOCTYPE html>
<html lang="en">
<head>


    @include('giaodien.layouts.style')

</head>
<body>
@include('giaodien.layouts.main-header')
@include('giaodien.layouts.category')

<div class="container">
    <div class="row d-flex no-gutters">
        <div class="col-md-12 heading-section ftco-animate">
            <p>{!! html_entity_decode($news->content, ENT_QUOTES, 'UTF-8') !!}</p>
        </div>


    </div>
</div>


@include('giaodien.layouts.footer')
@include('giaodien.layouts.script')
</body>
</html>
