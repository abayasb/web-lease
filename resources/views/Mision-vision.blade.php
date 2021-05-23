@extends('view-static.master_static')

@section('title','Quines somos')

@section('content')


<div class="header_main">
	
	</div>
    <!--services start--> 
<div class="section_service_main">
    <div class="section_service_2">
        <h1 class="service_text">Misión y Visión</h1>
    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="static/img/design-icon.png"></div>
    		    					<h1 class="written_text">MISIÓN</h1>
    		    					<p>Crecer a nivel nacional como un sitio de oferta de alojamientos estudiantiles, ofreciendo un servicio de calidad, responsable y transparente para nuestros usuarios.</p>
    		    				</div>
    		    			</div>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    				  <div class="like_icon"><img src="static/img/writing-icon.png"></div>
    		    					<h1 class="written_text">VISIÓN</h1>
    		    					<p>Ser reconocidos como el mejor servicio de hospitalidad para los estudiantes universitarios del país.</p>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>
   </div>	  	
    <!--services end -->
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
@stop