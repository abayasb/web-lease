@extends('view-static.master')

@section('title','descripcion')

@section('principal')
@if(Route::has('login'))
@auth
<a class="main-header__btn" href="\"><i class="fas fa-user">Welcome {{Auth::user()->name}}</a></i>
<a class="main-header__btn" href="{{ url('/logout')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Salir">
  <i class="fas fa-sign-out-alt">Salir</i>
</a>
<input class="main-header__input" type="search" placeholder="xxx"><i class="fas fa-search"></i>
@else
<a class="main-header__btn" href="\login"><i class="fas fa-user"> Unetenos Estudiante / Arrendatario</a></i>
@endauth
@endif
@stop


@section('contenido')
<div class="card" style="width: auto">
  <div class="row">
    <div class="col-2">
      <img src="{{url('uploads/'.$departamento->file_path.'/t_'.$departamento->foto_principal)}}" alt="Depa" width="100%" height="450" id="ProductImg">
      <div class="small-img-row">
        <div class="small-img-col">
          <img class="small-img" id="small-img" src="{{ url('uploads/'.$departamento->file_path.'/t_'.$departamento->foto_principal) }}" width="100%">
        </div>
        @foreach($galleria as $fotos)
        <div class="small-img-col">
          <img class="small-img" id="small-img" src="{{ url('uploads/'.$fotos->file_path.'/t_'.$fotos->file_name) }}" width="100%">
        </div>
        @endforeach
      </div>

    </div>
    <div class="col-2">
      <div class="info">
        <div class="shoeName">
          <div>
            <h1 class="big">Departamento en la provincia de {{$departamento->provincias->nombre_provincia}} </h1>
          </div>
          <h3 class="small">Ciudad de {{$departamento->ciudades->nombre_ciudad}}</h3>
        </div>
        <div class="description">
          <h3 class="title">Referencia</h3>
          <p class="text">Cerca de la universidad Nacional de Chimborazo</p>
          <h3 class="title">Direccion</h3>
          <p class="text">{{$departamento->direccion}}</p>
          <h3 class="title">Descripcion</h3>
          <p class="text">{{$departamento->descripcion}}: <br> Incluye los servicios de : {{$departamento->servicio}}</p>
        </div>

        <div class="buy-price">
          <a href="#" class="buy"><i class="fas fa-shopping-cart"></i>Reservalo a</a>
          <div class="price">
            <i class="fas fa-dollar-sign"></i>
            <h1>{{$departamento->precio}}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop