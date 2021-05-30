<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/view-general.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/style-about.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/descripcion-departamento.css?v='.time()) }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <header class="main-header">
        <!-- div. container limita en contenido de la pagina  -->
        <div class="container container--flex">
            <div class="main-header__container">
                <h1 class="main-header__title">EASY LEASE</h1>
                <span class="icon-menu fas fa-bars" id="btn-menu"></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="/" class="menu__link">Home</a></li>
                        <li class="menu__item"><a href="/about" class="menu__link">About</a></li>
                        <li class="menu__item"><a href="/Mision-vision" class="menu__link">Quienes somos</a></li>
                    </ul>
                </nav>
            </div>

            <div class="main-header__container">
                @section('principal')

                @show
            </div>
        </div>
    </header>

    @section('slider')
    @show
    @section('content')
    @show
    @section('contenido')
    @show
    <script src="{{ url('/static/js/intercambio-imagen.js') }}"></script>
    <script src="{{ url('/static/js/selects.js') }}"></script>
    <script src="{{ url('/static/js/slider.js') }}"></script>
    <script src="{{ url('/static/js/menu.js') }}"></script>
</body>

</html>