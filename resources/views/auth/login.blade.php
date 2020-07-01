<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Entrar | Tres Hermanos</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="#">

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background: url({{ asset('images/login-image.jpg') }});"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Administración Tres Hermanos</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" placeholder="Ingrese su Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" placeholder="Ingrese su Contraseña">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Recuérdame</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Entrar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
