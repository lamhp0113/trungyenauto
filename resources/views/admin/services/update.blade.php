@extends('admin.layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa dịch vụ</h3>
                    </div>
                    <form action="{{$services->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">


                            <div class="form-group">
                                <label>Tên dịch vụ</label>
                                <input class="form-control" required type="text" value="{{$services->name}}"
                                       name="name">
                            </div>
                            <div class="form-group">
                                <label>Loại dịch vụ</label>
                                <select class="form-control" name="category_id">
                                    @foreach($category as $dv)
                                        <option value="{{$dv->id}}"
                                                @if ($dv->id == $services->category_id) selected="selected" @endif >{{$dv->name}} </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" maxlength="255"  required type="text"
                                       value="{{$services->short_description}}" style="width:60%"
                                       name="short_description">
                            </div>


                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="6" id="content" name="long_description">{{$services->long_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" type="number"  value="{{$services->price}}"
                                       style="width:60%" name="price">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control" type="file" value="{{$services->images}}" style="width:60%"
                                       name="myFile">
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
                    ['height', ['height']]
                ],
                buttons: {
                    lfm: LFMButton
                },
                height: 200
            })
        });
    </script>

@endsection
