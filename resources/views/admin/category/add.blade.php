@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm mới loại dịch vụ</h3>
                    </div>
                    <form action="create" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Loại dịch vụ </label>
                                <input class="form-control" required="text" style="width:60%" name="name"/>
                            </div>
                            <div class="form-group">
                                <label>Thứ tự hiển thị</label>
                                <input class="form-control" type="number" required="number" style="width:60%"
                                       name="priority" value="0"/>
                            </div>
                            <button type="submit" class="btn btn-default"> Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

@endsection
