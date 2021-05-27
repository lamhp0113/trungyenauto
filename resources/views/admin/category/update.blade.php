 @extends('admin.layouts.main')
 @section('content')
 <div id="page-wrapper">
 	<div class="container-fluid">
 		<div class="row">
 			<!-- /.col-lg-12 -->
 			<div class="col-lg-7" style="padding-bottom:120px">
 				<form action="{{$cate->id}}" method="post" >
 					@csrf
 					@method('PUT')
 					<input type="hidden" name="_token" value="{{csrf_token()}}" >

 					<div class="form-group">
 						<label>Danh mục dịch vụ </label>
 						<input class="form-control" value="{{$cate->name}}"  required="text" style="width:60%" name="name" />
 					</div>
 					<div class="form-group">
 						<label>Thứ tự hiển thị</label>
 						<input class="form-control" type="number" value="{{$cate->priority}}" required="number"   style="width:60%" name="priority" value="0" />
 					</div>

 					<button type="submit" class="btn btn-default"> Cập nhật</button>

 					<form>
 					</div>
 				</div>
 				<!-- /.row -->
 			</div>
 			<!-- /.container-fluid -->
 		</div>


 		@endsection