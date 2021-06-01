@extends('admin.layouts.main')
@section('content')
    <?php
    $mappingStatus = [
        0 => 'Tin tức thông thường',
        1 => 'Tin khuyến mãi',
        2 => 'Trang liên hệ',
        3 => 'Trang giới thiệu công ty'
    ];
    ?>
    <div class="row">
        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Danh sách trang tin</h1>
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
                <table class="table table-head-fixed text-nowrap">
                    <tbody>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Thể loại</th>
                        <th>Hình ảnh</th>
                        <th>Ngày đăng</th>
                        <th>
                            <a class="btn btn-success" href="{{ route('news.create') }}">Thêm mới</a>
                        </th>
                    </tr>
                    @foreach ($news as $index => $ct)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$ct->title}}</td>
                            <td>{{$mappingStatus[$ct->type]}}</td>
                            <td>
                                <img src="{{asset($ct->image)}}" width="50px" height="50px" alt="">
                            </td>
                            <td>{{$ct->created_at }}</td>
                            <td>
                                <form action="{{ route('news.destroy', $ct->id) }}" method="POST">
                                    <a href="{{ route('news.edit', $ct->id) }}">
                                        <i class="fas fa-edit  fa-lg"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete"
                                            style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" class="text-center"></td>
                    </tr>
                    </tbody>
                </table>
                {!! $news->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
