@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chi Tiết Lịch Đặt</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('booking.update', $booking->id) }}" method="POST">
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
                                <label>Tên dịch vụ </label>
                                <input class="form-control"  value="{{$booking->service_name}}" disabled
                                />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" value="{{$booking->phone}}" disabled
                                       name="phone"/>
                            </div>

                            <div class="form-group">
                                <label>Hòm thư</label>
                                <input class="form-control" value="{{$booking->email}}" disabled
                                       name="email"/>
                            </div>

                            <div class="form-group">
                                <label>Thời gian đặt lịch</label>
                                <input class="form-control" value="{{$booking->booking_time}}" disabled
                                       name="booking_time"/>
                            </div>

                            <div class="form-group">
                                <label>Khách hàng ghi chú</label>
                                <textarea name="customer_comment" disabled class="form-control" rows="3"
                                          placeholder="Nhập ...">{{$booking->customer_comment}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Trạng thái xử lý</label>
                                <select class="form-control" name="status" @if (2 == old('status', $booking->status) || 3 == old('status', $booking->status)) disabled @endif>
                                    <option value="0"  @if (0 == old('status', $booking->status)) selected="selected" @endif>Khách đang chờ</option>
                                    <option value="1"  @if (1 == old('status', $booking->status)) selected="selected" @endif>Đang xử lý</option>
                                    <option value="2"  @if (2 == old('status', $booking->status)) selected="selected" @endif>Hoàn thành</option>
                                    <option value="3"  @if (3 == old('status', $booking->status)) selected="selected" @endif>Hủy bỏ</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea class="form-control" rows="3" name="remark"
                                          placeholder="Nhập ...">{{$booking->remark}}</textarea>
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
