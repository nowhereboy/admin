<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{config('app.name', 'Admin')}}">
    <meta name="author" content="tomRat">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{asset('img/favicon.html')}}">

    <title>{{config('app.name', 'Admin')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="login-body">
<div class="container">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        <h2 class="form-signin-heading">系统登录</h2>
        {{csrf_field()}}
        <div class="login-wrap">
            <input type="email" class="form-control" placeholder="邮箱" id="email" name="email" required autofocus>
            <input type="password" class="form-control" placeholder="密码" id="password" name="password" required>
            <label class="checkbox">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 记住密码
                {{--<span class="pull-right"> <a href="#"> 忘记密码?</a></span>--}}
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">登录</button>
        </div>
    </form>
</div>
</body>
</html>
