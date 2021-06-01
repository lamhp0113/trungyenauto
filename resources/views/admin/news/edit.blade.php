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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Có 1 số lỗi xảy ra với dữ liệu bạn nhập vào.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('news.update', $news->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group" style="width: 50%">
                                <label>Loại tin</label>
                                <select class="form-control" name="type">
                                    <option value="0">Tin thông thường
                                    </option>
                                    <option value="1">Tin khuyến mãi
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề </label>
                                <input class="form-control" name="title" value="{{$news->title}}"/>
                            </div>
                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea name="short_description" class="form-control" rows="3"
                                          placeholder="Nhập ...">{{$news->short_description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="6" name="content"
                                          placeholder="Nhập ...">{{$news->content}}</textarea>
                            </div>
                            <script src={{ url('ckeditor/ckeditor.js') }}></script>
                            <script>
                                CKEDITOR.replace('content', {
                                    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                                });
                            </script>
                            @include('ckfinder::setup')
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control" type="file" name="myFile" value="{{$news->image}}"/>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhập</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>



@endsection
