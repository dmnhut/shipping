@extends('container.template')
@section('content')
    <nav>
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="{{ route('dashboard') }}" class="breadcrumb">Bảng điều khiển</a>
                <a href="{{ route('pay') }}" class="breadcrumb">Lịch sử nạp tiền</a>
            </div>
        </div>
    </nav>
    <div class="card-panel">
        <table class="striped">
            <thead>
            <tr>
                <th>Khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Số xu đã nạp</th>
                <th>Ghi chú</th>
                <th>Ngày tạo giao dịch</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ number_format($item->coins) }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection