@extends('view-admin.authentication-master')

@section('title','Agregar-Departamento')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/departament') }}"><i class="fas fa-box nav-link"></i>Departamento</a> 
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/departament/add-departament') }}"><i class="fa fa-plus nav-link"></i>Agregar Departamento</a> 
    </li>

    
@endsection

@section('contenet')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class ="title"><i class="fa fa-plus"></i>Agregar departamento</h2>
            </div>
            <div class="inside">
               
            {!! Form::open(['url'=>'/admin/departament/add-departament'])!!}

                <div class="row">
                    <div class="col-md-8">
                        <label for="direcction-departament">Direccion del departamento</label>
                        {!! Form::text('direcction-departament',null,['class'=>'form-control']) !!}
                        <label for="description-departament">Descripcion del departamento</label>
                        {!! Form::textarea('description-departament',null,
                                ['class'=>'form-control',
                                'rows'=>6,
                                'name'=>'description-departament',
                                'id'=>'description-departament'])!!}
                    </div>
                    <div class="col-md-3">
                            <label for="cost">Precio</label>
                            {!!Form::number('cost',null,['class'=>'form-control'])!!}
                    
                            <label for="">Servicios incluidos</label>
                            {!! Form::label('Intenet','Internet',['class'=>'form-control'])!!}
                            {!! Form::checkbox('servicio', 'Internet',['class'=>'form-control']) !!}
                            
                            {!! Form::label('Agua','Agua',['class'=>'form-control'])!!}
                            {!! Form::checkbox('servicio', 'Agua',['class'=>'form-control'])!!}
                            
                            {!! Form::label('Luz','Luz',['class'=>'form-control'])!!}
                            {!! Form::checkbox('servicio', 'Luz',['class'=>'form-control'])!!}
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="localitation-provincia">Provincia</label>
                        
                         

                        {!! Form::select('_provincia',$provincias,null,['id'=>'_provincia',
                        'class'=>'form-control'])!!}
                    </div>

                    <div class="col-md-4">
                        <label for="">Ciudad</label>
                        {!!Form::select('_ciudad',['placeholder'=>'Seleccione'],null,['id'=>'_ciudad',
                            'class'=>'form-control'])!!}
                    </div>

                    <div class="col-md-4">
                        <label for="">Universidad</label>
                        {!!Form::select('_universidad',['placeholder'=>'Seleccione'],null,['id'=>'_universidad',
                            'class'=>'form-control'])!!}
                       
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-md-9">
                        <br>
                        {!! Form::label('file','Seleccione una imagen',['class'=>'label-control'])!!}
                        {!! Form::File('imagen',null,'[form-control]')!!}
                        
                    </div>
                    <div class="col-md-2">
                    <br>
                        {!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
                    </div>
                </div>

            {!! Form::close() !!}
            </div>
        </div>
    </div>
    
@endsection
@section('scritp')
    <script>
        $("#_provincia").change(function(event){
            $.get("_ciudad/"+event.target.value+"",function(response, provincia){
                console.log(response);
                $("#_ciudad").empty();
                $("#_ciudad").append("<option values='"+0+"'>"+"Seleccione"+"</option");
                $("#_universidad").append("<option values='"+0+"'>"+"Seleccione"+"</option");
                for (let index = 0; index < response.length; index++) {
                   $("#_ciudad").append("<option value='"+response[index].id_ciudad+"'>"+response[index].nombre_ciudad+"</option>") 
                }
            });
        });

        $("#_ciudad").change(function(event){
            $.get("_universidad/"+event.target.value+"",function(response, provincia){
                console.log("_universidad/"+event.target.value);
                $("#_universidad").empty();
                $("#_universidad").append("<option values='"+0+"'>"+"Seleccione"+"</option");
                for (let index = 0; index < response.length; index++) {
                   $("#_universidad").append("<option value='"+response[index].id_universidad+"'>"+response[index].nombre_universidad+"</option>") 
                }
            });
        });

    </script>
@endsection