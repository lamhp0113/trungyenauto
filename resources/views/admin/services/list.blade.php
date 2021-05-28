@extends('admin.layouts.main')
@section('content')

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Thứ tự</th>
                <th>
                    <a href="category/create" class="btn btn-sm btn-success">Thêm mới</a>
                </th>
            </tr>

                <tr>
                    <td></td>
                    <td> </td>
                    <td></td>
                    <td>

                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href=""><i class="fas fa-edit fa-lg text-danger"></i></a>
                            <button type="submit"  onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>



            <tr>
                <td colspan="5" class="text-center"></td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
