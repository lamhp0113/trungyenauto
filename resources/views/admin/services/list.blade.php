@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Danh sách dịch vụ</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="card-body table-responsive p-0">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <form class="example" action="{{url('/admin/search')}}" method="GET">
                                <label for="">Tìm kiếm</label>
                                <input type="text" name="keyword">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Tên dịch vụ</th>
                            <th>Loại dịch vụ</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>
                                <a href="services/create" class="btn btn-sm btn-success">Thêm mới</a>
                            </th>
                        </tr>
                        @foreach($services as $dv)
                            <tr>
                                <td>{{$dv->id}}</td>
                                <td>{{$dv->name}}</td>
                                <td>{{$dv->category_name}}</td>
                                <td>{{$dv->price}}</td>
                                <td><img src="{{asset($dv->images?$dv->images:'images/no_image.jpg')}}" width="50px"
                                         height="50px" alt=""></td>

                                <td>
                                    <a href="update-services/{{$dv->id}}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="services/{{$dv->id}}"
                                       onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')"
                                       class="btn btn-sm btn-danger">Remove</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {!! $services->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
@endsection
