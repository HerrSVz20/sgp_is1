<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name','laravel')}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        .login-fondo {
            background-image: url('assets/img/login.jpg');
            background-size: cover;
            background-position: top center;
        }
    </style>

</head>
<body class="hold-transition login-page login-fondo">
<div class="login-box">

    <div class="card">
        <div class="card-body login-card-body">

            <div class="text-center pb-3">
                <img style="height: 75px; width: auto;" src="{{asset('assets/img/Sisgpro-negro.png')}}" alt="Ventyo Logotipo">
            </div>

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Correo Electronico"
                           value="{{old('email')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Contraseña">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-success">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Recordarme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row pt-3 pb-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Iniciar Sesion</button>
                    </div>
                </div>

            </form>

            <p class="mb-1">
                <a class="text-success" href="forgot-password.html">¿Olvidaste tu contraseña?</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>

</body>
</html>
