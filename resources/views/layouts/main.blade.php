<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- BOOTSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- ESTILO CSS 3 -->
        <link href="/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <header class="row menu">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container-fluid collapse" id="navbarNav">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events" class="banner">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Criar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
    </body>
</html>
