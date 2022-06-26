<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--Font Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collpase navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/hcdevents_logo.png" alt="logo evento">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar<a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar<a>
                </li>
            </ul>
        </div>
    </header>
    </nav>
    
    @yield('content')
    <footer>
        <p>Site de Eventos &copy; 2022</p>
    </footer>
    <!--icones-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>