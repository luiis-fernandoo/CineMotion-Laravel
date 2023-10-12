<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @if(isset($filmEdit))
    <title>Editar Filme</title>
    @elseif(isset($sessionEdit))
    <title>Editar Sessão</title>
    @else
    <title>Cadastrar Filme</title>
    @endif

    <!-- Custom fonts for this template-->
    <link href="{{('/static/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{('/static/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-6 mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        @if(isset($filmEdit))
                                        <h1 class="h4 text-gray-900 mb-4">Editar Filme</h1>
                                        @elseif(isset($sessionEdit))
                                        <h1 class="h4 text-gray-900 mb-4">Editar Sessão</h1>
                                        @elseif(Route::current()->getName() == 'admin.addFilm')
                                        <h1 class="h4 text-gray-900 mb-4">Cadastrar Filme</h1>
                                        @elseif(Route::current()->getName() == 'admin.addSession')
                                        <h1 class="h4 text-gray-900 mb-4">Cadastrar Sessão</h1>
                                        @endif
                                    </div>

                                        <div class="form-group">
                                            @yield('content')
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{('/static/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{('/static/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{('/static/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{('/static/js/sb-admin-2.min.js')}}"></script>

</body>

</html>