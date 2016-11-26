<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<!-- CSRF Token -->--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--<!-- Styles -->--}}
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    {{--<!-- Scripts -->--}}
    {{--<script>--}}
        {{--window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>--}}
    {{--</script>--}}
</head>
<body class="hold-transition  body-class login-page ">
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
{{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
{{--@endif--}}
{{--<a href="{{ url('/logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}
{{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/first') }}"><b>女神生日快乐</b></a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">登录开始您的会话 </p>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {{--<label for="password">Email</label>--}}
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus   placeholder="邮箱帐号/管理员帐号">
                @if ($errors->has('email'))
                    <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {{--<label for="password">Password</label>--}}

                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="密码">

                @if ($errors->has('password'))
                    <span class="help-block">
                         <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            {{--<div class="form-group">--}}
                {{--<input type="checkbox" name="remember"> Remember Me--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<button type="submit" class="btn btn-primary">--}}
                    {{--Login--}}
                {{--</button>--}}

                {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">--}}
                    {{--Forgot Your Password?--}}
                {{--</a>--}}
            {{--</div>--}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat"> Login</button>
            </div>

        </form>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </div>
</div>
</body>
</html>


{{--<a href="{{ url('/logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}
{{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}

{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox" name="remember"> Remember Me--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-8 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Login--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ url('/password/reset') }}">--}}
{{--Forgot Your Password?--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
