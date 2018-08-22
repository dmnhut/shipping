<!DOCTYPE html>
<html>

<head>
    <title>Shipping | Admin</title>
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
    @yield('style')
</head>

<body class="grey lighten-4">
<nav class="grey darken-3">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Shipping</a>
            <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li class="active">
                    <a href="#"><i class="material-icons">settings</i></a>
                </li>
            </ul>
            <!-- Side nav -->
            <ul id="side-nav" class="side-nav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <div style="width: 1280px; height: 720px; background-color: #424242">
                            </div>
                        </div>
                        <a href="#">
                          <i class="material-icons">location_on</i>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="material-icons">settings</i></a>
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
<footer class="section grey darken-3 white-text center">
    <p><b>&copy; 2018</b> <i class="icon ion-heart"></i> <b>Github</b></p>
</footer>

<!-- Fix Action  Button -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large pink">
        <i class="material-icons">add</i>
    </a>
</div>

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