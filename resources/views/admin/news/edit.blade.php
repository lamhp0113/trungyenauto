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
                    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group" style="width: 50%">
                                <label>Loại tin</label>
                                <select class="form-control" name="type"
                                        @if (2 == old('status', $news->type)) disabled @endif>
                                    <option value="0" @if (0 == old('status', $news->type)) selected="selected" @endif>
                                        Tin thông thường
                                    </option>
                                    <option value="1" @if (1 == old('status', $news->type)) selected="selected" @endif>
                                        Tin khuyến mãi
                                    </option>
                                    <option value="2" @if (2 == old('status', $news->type)) selected="selected" @endif>
                                        Trang giới thiệu
                                    </option>
                                </select>
                            </div>

                            @if (2 != old('status', $news->type))
                                <div class="form-group">
                                    <label>Tiêu đề </label>
                                    <input class="form-control" name="title" value="{{$news->title}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input class="form-control" type="file" name="myFile" value="{{$news->image}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <textarea name="short_description" class="form-control" rows="3"
                                              placeholder="Nhập ...">{{$news->short_description}}</textarea>
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="6" id="content"
                                          name="content">{{$news->content}}</textarea>
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

    <script>
        $('#lfm').filemanager('image');
        $(document).ready(function () {
            // Define function to open filemanager window
            var lfm = function (options, cb) {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                window.SetUrl = cb;
            };

            var LFMButton = function (context) {
                var ui = $.summernote.ui;
                var button = ui.button({
                    contents: '<i class="note-icon-picture"></i> ',
                    tooltip: 'Chèn ảnh vào nội dung',
                    click: function () {

                        lfm({type: 'image', prefix: '/laravel-filemanager'}, function (lfmItems, path) {
                            lfmItems.forEach(function (lfmItem) {
                                context.invoke('insertImage', lfmItem.url);
                            });
                        });

                    }
                });
                return button.render();
            };

            $('#content').summernote({
                toolbar: [
                    ['popovers', ['lfm']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ],
                buttons: {
                    lfm: LFMButton
                },
                height: 250
            })
        });
    </script>

@endsection
