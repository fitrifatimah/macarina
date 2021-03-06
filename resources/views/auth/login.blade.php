@extends('la.layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body style="background: url(images/m1.jpg)">
    <div class="login-box" style="opacity: 0.7; background-color:   #FFA500" >
        <div class="login-logo">
            <a href="{{ url('/home') }}" ><font color="black"><b>MaFranchise</font></a>
        </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Maaf </strong> Username/Password yang anda masukkan salah<br><br>
           <!--  <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> -->
        </div>
    @endif

    <div class="login-box-body">
    <!-- <p class="login-box-msg">Sign in to start your session</p> -->
    <form action="{{ url('/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4" >
                <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color: #C4740B; border-color: #C4740B" href="{{ url(config('laraadmin.adminRoute')) }}">Log In</button>
            </div><!-- /.col -->
        </div>
    </form>

    @include('auth.partials.social_login')

    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
    <!--<a href="{{ url('/register') }}" class="text-center">Register a new membership</a>-->

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('la.layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
