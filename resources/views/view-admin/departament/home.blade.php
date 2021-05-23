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
                
                <table class = "table table-striped table-hover table-condensed mt-3">
                    <thead>
                        <tr>
                            <th>Foto Principal</th>
                            <th>Direccion</th>
                            <th>Descripcion</th>
                            <th>precio</th>
                            <th>Servicios</th>
                            <th>provincia</th>
                            <th>Ciudad</th>
                           
                        </tr>
                    </thead>

                    <tbody>
                        
                        @foreach($departament as $identificador)
                        @if(Auth::user()->id==$identificador->id)
                            <tr>
                                <td  width="64">
                                    <a href="{{ url('/uploads/'.$identificador->file_path.'/'.$identificador->foto_principal) }}" data-fancybox="gallery">
                                        <img src="{{ url('/uploads/'.$identificador->file_path.'/t_'.$identificador->foto_principal) }}" alt="" width="64">
                                    </a>
                                </td>
                                <td>{{$identificador->direccion}}</td>
                                <td>{{$identificador->descripcion}}</td>
                                <td>{{$identificador->precio}}</td>
                                <td>{{$identificador->servicio}}</td>
                                <td>{{$identificador->provincias->nombre_provincia}}</td>
                                <td>{{$identificador->ciudades->nombre_ciudad}}</td>
                                <td>
                                    <div class="opts">
                                        <a href="{{ url('/admin/departament/'.$identificador->id_departamento.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <a href="{{ url('/admin/departament'.$identificador->id_departamento.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

