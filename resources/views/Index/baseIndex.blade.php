<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=Martian+Mono:wght@200&family=Open+Sans:wght@400;700&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/style.css">
    <title>CineMotion</title>
</head>

<body>
    <div class="body-container">
        <nav>
            <h2 class="logo"><a href="">Cine <span>Motion</span></a></h2>
            <ul>
                <li> <a href="#">Pagina Inicial</a></li>
                <li> <a href="#">Filmes</a></li>
                <li> <a href="#">Sessões</a></li>
                <li> <a href="#">Ingressos</a></li>
            </ul>
            @if(Auth::check())
            <button id="" class="btn btn-danger">Voltar</button>
            @else
            <button class="btn btn-danger"><a href="{{ route('login.Login') }}" style="text-decoration: none; color:white;">Fazer Login</a></button>
            @endif
        </nav>

        @yield('content')


        <div class="footer-basic">
            <footer>
                <div class="social"><a href="https://www.instagram.com/luiis__fernandoo/"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/Fernando_luiss_"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Inicial</a></li>
                    <li class="list-inline-item"><a href="#">Filmes</a></li>
                    <li class="list-inline-item"><a href="#">Sessões</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                </ul>
                <p class="copyright">Luis Fernando Oliveira © 2023</p>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>
    </div>

</body>

</html>