@extends('view-static.master')

@section('title','Acerca de Nosotros')

@section('content')
<div class = "container_general_about">
  <div class = "contaniner_about_descripcion">
      <h1>Acerca de nosotros</h1>
    <div class = "linea"></div>
    <p>Somos <b>EasyLease</b>, un sitio web que oferta departamentos estudiantiles. 
				La idea de este sitio surgió por la travesía que vivió un integrante de nuestro equipo durante sus estudios en la Universidad,
				donde se le dificulto hallar un departamento para habitar. Siendo él residente de otra ciudad, tuvo que pasar horas e incluso días buscando 
				un lugar.
				<br>Estamos seguros que este sitio web facilitará a los estudiantes universitarios a encontrar un lugar donde habitar, sin importar 
				el lugar a donde vayan.</br>
				Es por ello que estamos muy gustosos de poner a vuestra disposición este sitio, creado y pensado en ustedes...<br>
				<br>Att. Ángel y Daniel</br>
				<b>Equipo EasyLease</b></p>
    </div>

<div class = "contact_main">
  <div class = "container_title">
    <h1>Contactanos</h1>
    <div class = "linea"></div>
    <div class ="example example-flex">
      <div class = "example-content">
        <div class ="parent">
          <div class ="item">
                <img src =  "{{ url('/static/img/map-icon.png')}}" >  
                <p class = "text-map">Milagro, Ecuador</p>  
            </div>
          
          <div class ="item">
            <img src =  "{{ url('/static/img/call-icon.png')}}" >
            <p class = "text-phone">+593978671424</p>
          </div>
          <div class ="item">
            <img src =  "{{ url('/static/img/email-icon.png')}}" >
            <p class = "text-mail">abayasb@unemi.edu.ec</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">© 2021 Todos los derechos reservados. <a href="www.easylease.com">EasyLease</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


      <!-- Javascript files-->
      <script src="{{ url('public/static/js/jquery.min.js')}}"></script>
      <script src="{{ url('public/static/js/js/popper.min.js')}}"></script>
      <script src="{{ url('public/static/js/js/bootstrap.bundle.min.js')}}"></script>
@stop()