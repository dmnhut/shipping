@extends('container.template')
@section('content')
    <nav>
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="{{ route('dashboard') }}" class="breadcrumb">Bảng điều khiển</a>
                <a href="{{ route('users') }}" class="breadcrumb">Tài khoản người dùng</a>
            </div>
        </div>
    </nav>
    <div class="card-panel">
        <table class="striped">
            <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tên tài khoản</th>
                <th>Giới tính</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->nickname}}</td>
                    <td>{{$item->sex}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection