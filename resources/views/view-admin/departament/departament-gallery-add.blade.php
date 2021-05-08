@extends('view-admin.authentication-master')

@section('title','Fotografia')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/gallery') }}"><i class="fa fa-picture-o nav-link"></i>Fotografias</a> 
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/gallery/departament-gallery-add') }}"><i class="fa fa-picture-o nav-link"></i>Agrerar Fotografia</a> 
    </li>

@endsection

@section('contenet')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class ="title"><i class="fa fa-plus"></i>Agregar Fotografia</h2>
            </div>
            <div class="inside">
               
                {!! Form::open(['url'=>'/admin/departament/departament-gallery-add'])!!}

                {!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection