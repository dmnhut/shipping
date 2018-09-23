@extends('container.template')
@section('content')
    <nav>
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="{{ route('dashboard') }}" class="breadcrumb">Bảng điều khiển</a>
                <a href="{{ route('order') }}" class="breadcrumb">Danh sách đơn hàng</a>
            </div>
        </div>
    </nav>
    <div class="card-panel">
        <table class="striped">
            <thead>
            <tr>
                <th>Mã</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Giá</th>
                <th>Địa chỉ giao</th>
                <th>Địa chỉ nhận</th>
                <th>Hình ảnh</th>
                <th>Ngày tạo</th>
                <th>Trạng thái</th>
                <th>Tạo bởi</th>
                <th>Chuyển hàng</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ number_format($item->price) }}</td>
                    <td>{{ $item->address_from }}</td>
                    <td>{{ $item->address_to }}</td>
                    <td><img width="100px" height="100px" src="{{ $item->image }}"></td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->status_order_name }}</td>
                    <td>{{ $item->user_name }} - {{ $item->user_name_phone }}</td>
                    <td>{{ $item->user_ship_name }} - {{ $item->user_ship_phone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection