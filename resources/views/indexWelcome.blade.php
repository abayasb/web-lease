@extends('view-static.master')

@section('title','Home')

@section('slider')
<div id="contenedor-slider" class="contenedor-slider">
    <div id="slider" class="slider">
        <div class="slider__section"><img src="{{ url ('/static/img/arriendo.jpg') }}" class="slider__img"></div>
        <div class="slider__section"><img src="{{ url ('/static/img/Departamento_Uno.jpeg') }}" class="slider__img"></div>
        <div class="slider__section"><img src="{{ url ('/static/img/faci.jpg') }}" class="slider__img"></div>
        <div class="slider__section"><img src="{{ url ('/static/img/descarga.jpg') }}" class="slider__img"></div>
    </div>
    <div id="btn-prev" class="btn-prev">&#60;</div>
    <div id="btn-next" class="btn-next">&#62;</div>
</div>
@stop

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
{!! Form::open(['url'=>'']) !!}
<div class="container-select">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <label for="" class="title-items">Provincia</label>
                {!! Form::select('_provincia',$provincias,null,['id'=>'_provincia',
                'placeholder' => 'Seleccione'
                ])!!}
            </div>
            <div class="col-md-2">
                <label for="" class="title-items">Ciudad</label>
                {!!Form::select('_ciudad',['placeholder'=>'Seleccione'],null,['id'=>'_ciudad'])!!}
            </div>
            <div class="col-5">
                <label for="" class="title-items">Universidad</label>
                {!!Form::select('_universidad',['placeholder'=>'Seleccione'],null,['id'=>'_universidad'])!!}
            </div>

            <div class="col-ms-2">
                {!! Form::submit('Buscar',['class'=>'btn btn-success'])!!}
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
<main class="main">
    <div class="container">
        <h2 class="main-title">Departamentos Disponibles</h2>
        <section class="container-depatamentos">
            @foreach($departamento as $depa)
            <a href="descripcion/{{$depa->id_departamento}}" style="text-decoration: none;">
                <div class="departament">
                    <img src="{{ url('uploads/'.$depa->file_path.'/t_'.$depa->foto_principal) }}" alt="" style="width: 100%;height: 150px;object-fit: cover;">
                    <div class="departament-description">
                        <h3 class="departament__title">Departamento en {{$depa->provincias->nombre_provincia}}</h3>
                        <spam class="departament__price">$ {{$depa->precio}}</spam>
                    </div>
                    <i class="product__icon fa fa-info-circle">Mas informacion </i>
                </div>
            </a>
            @endforeach
        </section>
    </div>

</main>

@stop