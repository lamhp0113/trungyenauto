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
      @foreach($cate as $ct)
      <tr>
        <td>{{$ct->id}}</td>
        <td>{{$ct->name}} </td>
        <td>{{$ct->priority}}</td>
        <td>
         
         <form action="category/{{$ct->id}}" method="POST">
          @csrf
          @method('DELETE')
          <a href="category/{{$ct->id}}"><i class="fas fa-edit fa-lg text-danger"></i></a>
          <button type="submit"  onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')" title="delete" style="border: none; background-color:transparent;">
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