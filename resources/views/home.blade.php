<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="window-target" cont  ent="_top">
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="css/mreset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSRF Token -->
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>我们一路走来爱的见证</title>

    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link href="css/header.css"rel="stylesheet">

    <style type="text/css">
        .bg1{
            {{--background: {{asset('img/photo4.png')}};--}}
            background: url(img/photo4.jpg);
            background-size: 100% 100%;
        }
        .bg2{
            background: url(img/photo2.png);
            background-size: 100% 100%;
        }
        .bg3{
            background: url(img/photo3.jpg);
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
<div class="header">
    <ul>
        <li>
            <a herf=""><img src="img/photo.png">图片</a>
        </li>
        <li class="barleft" >
            <a href="{{url('photo')}}">
                <span>照片墙</span>
            </a></li>
        <li><a href="#">留言板</a></li>
        <li><a href="#">我们</a></li>
        <li>           <a href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
                Logout
            </a></li>

        <li style="float: right">
            <a>来访姓名</a>
        </li>
    </ul>
</div>


<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<div id="fullpage">
    <div class="section bg1">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1 style="color:#FFFFFF">One</h1>
            {{--<a href="{{ url('/logout') }}"--}}
               {{--onclick="event.preventDefault();--}}
       {{--document.getElementById('logout-form').submit();">--}}
                {{--Logout--}}
            {{--</a>--}}
        </div>
    </div>
    <div class="section bg2">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1 style="color:#FFFFFF">Two</h1>
        </div>
    </div>
    <div class="section bg3">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1 style="color:#FFFFFF">Three</h1>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fullpage.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage(
                {
                    navigation: true
                });

    });
</script>
<!-- Scripts -->
{{--<script src="/js/app.js"></script>--}}
</body>
</html>


{{--<body>--}}
{{--<a href="{{ url('/logout') }}"--}}
   {{--onclick="event.preventDefault();--}}
       {{--document.getElementById('logout-form').submit();">--}}
    {{--Logout--}}
{{--</a>--}}
{{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
    {{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- Scripts -->--}}
{{--<script src="/js/app.js"></script>--}}
{{--</body>--}}