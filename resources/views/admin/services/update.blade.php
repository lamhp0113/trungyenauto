	 @extends('admin.layouts.main')
    @section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> 
                        Dịch vụ
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{$services->id}}" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" type="text" value="{{$services->name}}" style="width:60%" name="name" >
                    </div>  
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input class="form-control" type="text" value="{{$services->short_description}}"  style="width:60%" name="short_description" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input class="form-control" type="text" value="{{$services->long_description}}"  style="width:60%" name="long_description" >
                    </div>
                    <div class="form-group">
                        <label>Gía</label>
                        <input class="form-control" type="number" value="{{$services->price}}"  style="width:60%" name="price" >
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control" type="file" value="{{$services->images}}"  style="width:60%" name="myFile" >

                        <img src="{{asset($services->images)}}" width="50px" height="50px"	 alt="">
                    </div>
            	


                    <button type="submit" class="btn btn-default"> Cập nhật</button>

                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection