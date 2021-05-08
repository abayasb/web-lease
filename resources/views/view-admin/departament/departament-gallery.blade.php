@extends('view-admin.authentication-master')

@section('title','Fotografia')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/departament') }}"><i class="fa fa-picture-o nav-link"></i>Fotografias</a> 
    </li>
@endsection

@section('contenet')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class ="title">Galeria</h2>
            </div>
            <div class="inside">
                <div class="button ">
                    <a href="{{ url('/admin/gallery/departament-gallery-add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                    Agregar nueva fotografia </a>
                </div>
            </div>
        </div>
    </div>
@endsection