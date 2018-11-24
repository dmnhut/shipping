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
    <div class="row">
        <div class="input-field col s12">
            <input id="txt" type="text" class="validate">
            <label for="txt">Tìm kiếm</label>
        </div>
    </div>
    <div class="card-panel">
        <table class="striped responsive-table">
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
@section('script')
    <script>
        console.clear();
        document.querySelector('#txt').addEventListener('input', function () {
            let count = 0;
            let rows = document.getElementsByTagName('table')[0].rows;
            for (let i = 1; i < rows.length; i++) {
                for(let cell = 0 ; cell < rows[i].childNodes.length; cell++){
                    try{
                        if (rows[i].childNodes[cell].childNodes.length !== 0) {
                            if (rows[i].childNodes[cell].childNodes[0].nodeValue.toUpperCase().indexOf(this.value.toUpperCase()) > -1) {
                                rows[i].style.display = '';
                                count++;
                                break;
                            } else {
                                rows[i].style.display = 'none';
                            }
                        }
                    }catch (e) {
                        continue;
                    }
                }
            }
            if (count === 0) {
                rows[0].style.display = 'none';
            } else {
                rows[0].style.display = '';
            }
        });
    </script>
@endsection