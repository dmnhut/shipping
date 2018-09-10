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
                <th>Name</th>
                <th>Item Name</th>
                <th>Item Price</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td>$3.76</td>
            </tr>
            <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td>$7.00</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection