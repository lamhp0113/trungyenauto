@extends('admin.layouts.main')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Loại dịch vụ</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>ID</th>
                <th>Loại dịch vụ</th>
                <th>Thứ tự hiển thị</th>
                <th>
                    <a href="category/create" class="btn btn-sm btn-success">Thêm mới</a>
                </th>
            </tr>
            @foreach($cate as $ct)
                <tr>
                    <td>{{$ct->id}}</td>
                    <td>{{$ct->name}} </td>
                    <td>{{$ct->priority}}</td>
                    <td>
                        <form action="category/{{$ct->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="category/{{$ct->id}}"> <i class="fas fa-edit  fa-lg"></i></a>
                            <button type="submit" onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')"
                                    title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="5" class="text-center"></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
