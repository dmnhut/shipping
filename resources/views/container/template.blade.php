<!DOCTYPE html>
<html>

<head>
    <title>Hệ thống quản lý giao dịch chuyển hàng | Admin</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/png" href="{{ url("material/img/favicon.png") }}">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ url("material/css/materialize.min.css") }}"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ url("material/css/main.css") }}"/>
    <link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <style>
        .pointer {
            cursor: pointer;
        }

        @media (max-width: 650px) {
            .brand-logo {
                display: none !important;
            }
        }
    </style>
    @yield('style')
</head>

<body class="grey lighten-4">
<nav class="grey darken-4">
    <div class="container">
        <div class="nav-wrapper">
            <a href="{{ route('dashboard') }}" class="brand-logo center">Quản lý chuyển hàng</a>
            <a href="#" title="Danh sách điều hướng" data-activates="side-nav"
               class="button-collapse show-on-large right">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li {{ \App\helpers::isActive('dashboard') }}>
                    <a href="{{ route('dashboard') }}" title="Bảng điều khiển"><i
                                class="material-icons">dashboard</i></a>
                </li>
            </ul>
            <!-- Side nav -->
            <ul id="side-nav" class="side-nav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <div style="width: 1280px; height: 720px; background-color: #212121">
                            </div>
                        </div>
                    </div>
                </li>
                <li {{ \App\helpers::isActive('dashboard') }}>
                    <a href="{{ route('dashboard') }}" title="Bảng điều khiển"><i class="material-icons">dashboard</i>Quản
                        lý chuyển hàng</a>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li {{ \App\helpers::isActive('users') }}>
                    <a href="{{ route('users') }}"><i class="material-icons">people</i>
                        Tài khoản người dùng
                    </a>
                </li>
                <li {{ \App\helpers::isActive('order') }}>
                    <a href="{{ route('order')  }}"><i class="material-icons">book</i>
                        Danh sách đơn hàng
                    </a>
                </li>
                <li {{ \App\helpers::isActive('pay') }}>
                    <a href="{{ route('pay') }}"><i class="material-icons">attach_money</i>
                        Lịch sử nạp tiền
                    </a>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li>
                    <a href="{{ route('logout') }}"><i class="material-icons">exit_to_app</i>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section section-visitors lighten-4">
    <div class="row">
        <div class="col s12 m12 l12">
            @yield('content')
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="section grey darken-4 white-text center">
    <p><b>&copy; 2018</b> <i class="icon ion-heart"></i> <b>Github</b></p>
</footer>

<!-- Fix Action  Button -->
{{--<div class="fixed-action-btn">--}}
{{--<a class="btn-floating btn-large pink">--}}
{{--<i class="material-icons">add</i>--}}
{{--</a>--}}
{{--</div>--}}

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ url("material/js/materialize.min.js") }}"></script>
<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
<script>
    $('.button-collapse').sideNav();
</script>
@yield('script')
</body>

</html>