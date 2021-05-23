@extends('view-static.master_static')

@section('title','Acerca de Nosotros')

@section('content')
<div class="about_main">
    <div class="services_main">
    	<div class="container">
    		<div class="creative_taital">
    			<h1 class="creative_text">Acerca de Nosotros</h1>
    			<p style="color: #050000; text-align: center;">Somos <b>EasyLease</b>, un sitio web que oferta departamentos estudiantiles. 
				La idea de este sitio surgió por la travesía que vivió un integrante de nuestro equipo durante sus estudios en la Universidad,
				donde se le dificulto hallar un departamento para habitar. Siendo él residente de otra ciudad, tuvo que pasar horas e incluso días buscando 
				un lugar.
				<br>Estamos seguros que este sitio web facilitará a los estudiantes universitarios a encontrar un lugar donde habitar, sin importar 
				el lugar a donde vayan.</br>
				Es por ello que estamos muy gustosos de poner a vuestra disposición este sitio, creado y pensado en ustedes...<br>
				<br>Att. Ángel y Daniel</br>
				<b>Equipo EasyLease</b></p>
    			<div class="btn_main">
    			    <button type="button" class="btn btn-dark btn-lg">Inicio</button>
    		    </div>
    		</div>    
    	</div>

    <!--Contact_section start -->
    <div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Contactos</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="static/img/map-icon.png" style="max-width: 100%;padding-left: 30px; ">
                            <p class="email-text"><a href="#">Milagro, Ecuador<br>Ec</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="static/img/call-icon.png" style="max-width: 100%;padding-left: 30px;">
                            <p class="email-text"><a href="#">+593 69156475</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="static/img/email-icon.png" style="max-width: 100%; padding-left: 30px;">
                            <p class="email-text"><a href="#">abayasb@unemi.edu.ec</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Contact_section end -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">© 2021 Todos los derechos reservados. <a href="www.easylease.com">EasyLease</a></p>
                </div>
            </div>
        </div>
    </div>
      <!-- Javascript files-->
      <script src="{{ url('public/static/js/jquery.min.js')}}"></script>
      <script src="{{ url('public/static/js/js/popper.min.js')}}"></script>
      <script src="{{ url('public/static/js/js/bootstrap.bundle.min.js')}}"></script>
@stop()