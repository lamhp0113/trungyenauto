 @extends('admin.layouts.main')
 @section('content')
 			<!-- /.box-header -->
 			<div class="box-body table-responsive no-padding">
 				<table class="table table-hover">
 					<tbody>
 						<tr>
 							<th>ID</th>
 							<th>Tiêu đề</th>
 							<th>Mô tả</th>
 							<th>Nội dung</th>
 							<th>Gia</th>
 							<th>Hình ảnh</th>
 						
 						
 							<th>
 								<a href="services/create" class="btn btn-sm btn-success">Thêm mới</a>
 								
 							</th>
 						</tr>
 						
 						@foreach($services as $dv)
 						<tr>
 							<td>{{$dv->id}}</td>
 							<td>{{$dv->name}}</td>
 							<td>{{$dv->short_description}}</td>
 							<td>{{$dv->	long_description}}</td>
 							<td>{{$dv->price}}</td>

 							<td><img src="{{$dv->images}}" width="50px" height="50px" alt=""></td>
 							
 							<td>
 								<a href="update-services/{{$dv->id}}" class="btn btn-sm btn-info">Edit</a>
 								<a href="services/{{$dv->id}}" onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')" class="btn btn-sm btn-danger">Remove</a>
 							</td>
 						</tr>
 						@endforeach
 						
 					
 					</tbody>
 		</table>
 		  {!! $services->links('pagination::bootstrap-4') !!}
</div>
 
 @endsection