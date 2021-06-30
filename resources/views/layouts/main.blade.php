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
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- ION ICON-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- ESTILO CSS 3 -->
        <link href="/css/styles.css" rel="stylesheet">
        <link href="/css/bootstrap.css" rel="stylesheet">
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
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard">Meus Eventos</a>
                            </li>
                            <li class="nav-item">
                               <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout"
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register" tabindex="-1" aria-disabled="true">Cadastrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        @if(session('msg'))
            <div class="alert alert-danger" role="alert">
                <p class="msg">{{ session('msg') }}</p>
            </div>
        @endif
        <!-- Footer-->
        @yield('content')
        <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
        <!-- Navigation-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
    </body>
</html>
