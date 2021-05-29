@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhập loại dịch vụ</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{$cate->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Danh mục dịch vụ </label>
                                <input class="form-control" value="{{$cate->name}}" required="text" style="width:60%"
                                       name="name"/>
                            </div>
                            <div class="form-group">
                                <label>Thứ tự hiển thị</label>
                                <input class="form-control" type="number" value="{{$cate->priority}}" required="number"
                                       style="width:60%" name="priority" value="0"/>
                            </div>
                            <button type="submit" class="btn btn-default">Cập nhập</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

@endsection
