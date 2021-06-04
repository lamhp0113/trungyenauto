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
                                <textarea class="form-control" rows="6" id="content" name="long_description">{!! old('content',) !!}</textarea>
                            </div>

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
    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function(){

            // Define function to open filemanager window
            var lfm = function(options, cb) {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                window.SetUrl = cb;
            };

            // Define LFM summernote button
            var LFMButton = function(context) {
                var ui = $.summernote.ui;
                var button = ui.button({
                    contents: '<i class="note-icon-picture"></i> ',
                    tooltip: 'Insert image with filemanager',
                    click: function() {

                        lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {
                            lfmItems.forEach(function (lfmItem) {
                                context.invoke('insertImage', lfmItem.url);
                            });
                        });

                    }
                });
                return button.render();
            };

            // Initialize summernote with LFM button in the popover button group
            // Please note that you can add this button to any other button group you'd like
            $('#content').summernote({
                toolbar: [
                    ['popovers', ['lfm']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                buttons: {
                    lfm: LFMButton
                },
                height: 200
            })
        });
    </script>
@endsection
