@extends('admin.layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới dịch vụ</h3>
                    </div>
                    <form action="create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">


                            <div class="form-group">
                                <label>Tên dịch vụ</label>
                                <input class="form-control" required type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Loại dịch vụ</label>
                                <select class="form-control" name="category_id" >
                                    @foreach($category as $dv)
                                    <option value="{{$dv->id}}" >{{$dv->name}} </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" required type="text" style="width:60%" name="short_description">
                            </div>

                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="6" name="long_description"
                                          placeholder="Nhập ..."></textarea>
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
                                <input class="form-control"  type="number" style="width:60%" name="price">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control"  type="file" style="width:60%" name="myFile">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                                <button type="reset" class="btn btn-default">Làm Mới</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
