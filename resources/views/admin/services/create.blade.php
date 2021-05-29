	 @extends('admin.layouts.main')
    @section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> 
                        Sản phẩm
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="create" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" type="text"   style="width:60%" name="name" >
                    </div>  
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input class="form-control" type="text"   style="width:60%" name="short_description" >
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input class="form-control" type="text"   style="width:60%" name="long_description" >
                    </div>
                      <div class="form-group">
                        <label>Gía</label>
                        <input class="form-control" type="number"   style="width:60%" name="price" >
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control" type="file"  style="width:60%" name="myFile" >
                    </div>
            	


                    <button type="submit" class="btn btn-default"> Thêm mới</button>

                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection