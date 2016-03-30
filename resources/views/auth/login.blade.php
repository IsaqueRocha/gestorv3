@extends('default')
@section('content')

<!--
Esta página tem que ser independente
e não mostrar o topo das demais páginas
@to-do
-->

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ asset('assets/theme/img/logo-300px.png') }}">
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Há algo de errado com seus dados.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback" style="margin-bottom:0px;">
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="col-md-12">
                        <input type="password" class="form-control" name="password" placeholder="Senha"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin-left:20px;">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Continuar conectado
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 15px;">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Entrar</button>
                    </div>
                </div>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="../../../assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../../../assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
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
