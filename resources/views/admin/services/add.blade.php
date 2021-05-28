@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('booking.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <label>Tên khách </label>
                                <input class="form-control" value="{{$booking->customer_name}}" disabled
                                       name="customer_name"/>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control"  disabled
                                       name="phone"/>
                            </div>

                            <div class="form-group">
                                <label>Hòm thư</label>
                                <input class="form-control"  disabled
                                       name="email"/>
                            </div>

                            <div class="form-group">
                                <label>Thời gian đặt lịch</label>
                                <input class="form-control"
                                       name="booking_time"/>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhập</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>



@endsection
