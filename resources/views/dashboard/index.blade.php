@extends('container.template')
@section('content')
    <nav>
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="{{ route('dashboard') }}" class="breadcrumb">Bảng điều khiển</a>
            </div>
        </div>
    </nav>
    <div class="col s12 m4 l4 pointer">
        <a href="{{ route('users') }}">
            <div class="hoverable card-panel pink lighten-1 white-text center">
                <i class="material-icons medium">people</i>
                <h5>Tài khoản người dùng</h5>
            </div>
        </a>
    </div>
    <div class="col s12 m4 l4 pointer">
        <a href="{{ route('order') }}">
            <div class="hoverable card-panel pink-text center">
                <i class="material-icons medium">book</i>
                <h5>Quản lý đơn hàng</h5>
            </div>
        </a>
    </div>
    <div class="col s12 m4 l4 pointer">
        <a href="{{ route('pay') }}">
            <div class="hoverable card-panel pink lighten-1 white-text center">
                <i class="material-icons medium">attach_money</i>
                <h5>Lịch sử nạp tiền</h5>
            </div>
        </a>
    </div>
@endsection