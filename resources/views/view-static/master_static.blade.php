<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('/static/css/css-static/animate.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/bootstrap.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/jquery-ui.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/jquery.mCustomScrollbar.min?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/meanmenu.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/nice-select.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/normalize.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/owl.carousel.min.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/responsive.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/vslick.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('/static/css/css-static/style.css?v='.time()) }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    


</head>
<body> 

<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="Mision-vision">SERVICES</a></li>
      	                        @section('home')
                                @show
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
        
    <div class="header_main">
		<div class="container">
			<div class="logo"><a href="index.html"><img width="25%" src="/static/img/logo.png"></a></div>
		</div>
    </div>


    @section('content')

    @show
</body>
</html>