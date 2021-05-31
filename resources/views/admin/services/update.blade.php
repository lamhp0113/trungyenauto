
     @extends('admin.layouts.main')
     @section('content')

         <div class="container-fluid">
             <div class="row">
                 <!-- left column -->
                 <div class="col-md-12">
                     <!-- general form elements -->
                     <div class="card card-primary">
                         <div class="card-header">
                             <h3 class="card-title">Sửa bài viết</h3>
                         </div>
                         <form action="{{$services->id}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="card-body">


                                 <div class="form-group">
                                     <label>Tiêu đề</label>
                                     <input class="form-control" required type="text" value="{{$services->name}}" name="name">
                                 </div>
                                 <div class="form-group">
                                     <label>Mô tả</label>
                                     <input class="form-control" required type="text" value="{{$services->short_description}}" style="width:60%" name="short_description">
                                 </div>

                                 <div class="form-group">
                                     <label>Nội dung</label>
                                     <textarea class="form-control" rows="6"   name="long_description"
                                               placeholder="Nhập ...">{{$services->long_description}}</textarea>
                                 </div>
                                 <script src={{ url('ckeditor/ckeditor.js') }}></script>
                                 <script>
                                     CKEDITOR.replace('long_description', {
                                         filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                                     });
                                 </script>
                                 @include('ckfinder::setup')
                                 <div class="form-group">
                                     <label>Giá</label>
                                     <input class="form-control" type="number" required value="{{$services->price}}" style="width:60%" name="price">
                                 </div>
                                 <div class="form-group">
                                     <label>Hình ảnh</label>
                                     <input class="form-control" type="file"  value="{{$services->images}}" style="width:60%" name="myFile">
                                 </div>
                             </div>
                             <!-- /.card-body -->
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-primary">Cật nhập</button>

                             </div>
                         </form>
                     </div>
                     <!-- /.card -->
                 </div>
             </div>
         </div>

     @endsection
