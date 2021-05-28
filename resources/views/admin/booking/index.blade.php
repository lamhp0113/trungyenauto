@extends('admin.layouts.main')
@section('content')
    <?php
    $mappingStatus = [
        0 => 'Khách đang chờ',
        1 => 'Đang xử lý',
        2 => 'Hoàn Thành',
        3 => 'Đã hủy'
    ];
    ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách khách hàng đặt lịch</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>STT</th>
                <th>Tên Khách hàng</th>
                <th>Số điện thoại</th>
                <th>email</th>
                <th>thời gian đặt lịch</th>
                <th>Khách hàng ghi chú</th>
                <th>Trạng Thái</th>
                <th colspan="2">Ghi chú</th>

            </tr>
            @foreach ($orders as $index => $ct)
                <tr>
                    <td>{{++$index}}</td>
                    <td>{{$ct->customer_name}} </td>
                    <td>{{$ct->phone}}</td>
                    <td>{{$ct->email}}</td>
                    <td>{{$ct->booking_time}} </td>
                    <td>{{$ct->customer_comment}} </td>
                    <td>{{$mappingStatus[$ct->status]}}</td>
                    <td>{{$ct->remark}}</td>
                    <td>
                        <a href="{{ route('booking.edit', $ct->id) }}"><i class="fas fa-edit fa-lg text-danger"></i></a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="9" class="text-center"></td>
            </tr>
            </tbody>
        </table>
        {!! $orders->links('pagination::bootstrap-4') !!}
    </div>

@endsection
