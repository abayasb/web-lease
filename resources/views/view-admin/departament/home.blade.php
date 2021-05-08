@extends('view-admin.authentication-master')

@section('title','Departamento')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/departament') }}"><i class="fas fa-box nav-link"></i>Departamento</a> 
    </li>
@endsection

@section('contenet')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class ="title">Departamento</h2>
            </div>
            <div class="inside">
                <div class="button ">
                    <a href="{{ url('/admin/departament/add-departament') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                    Agregar departamento </a>
                </div>
            </div>
        </div>
    </div>
@endsection

