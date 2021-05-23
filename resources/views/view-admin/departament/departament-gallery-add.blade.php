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
                {!!Form::open()!!}
                    <div class="row">
                        <div class="col-md-8">
                            {!! Form::label('direccion','Direccion')!!}
                            {!! Form::text('direcction',$departament->direccion,['class'=>'form-control'])!!}
                            {!! Form::label('Descripcion','Descripcion del departamento')!!}
                            {!! Form::textarea('description-departament',$departament->descripcion,
                                ['class'=>'form-control',
                                'rows'=>8,
                                'name'=>'description-departament',
                                'id'=>'description-departament'])!!}
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('photo','Fotografia Principal')!!}
                                <div class="inside">
                                    <img src="{{ url('/uploads/'.$departament->file_path.'/'.$departament->foto_principal) }}" alt="Foto_Principal" class="img-fluid">    
                                </div>
                        </div>
                    </div>  
                        <hr style="border:105px;">
                    <div class="row">
                        <h3>Agregar mas fotos a tu departamento</h3>
                    </div>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection