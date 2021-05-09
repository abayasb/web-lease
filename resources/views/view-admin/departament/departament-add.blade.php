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
                        
                        <select name="provincia" id="provincia" class="form-control">
                            
                            @foreach($provincias as $pro)
                                <option value="{{$pro->id_provincia}}">{{$pro->nombre_provincia}}</option>
                            @endforeach
                            
                            
                        </select> 
                    </div>

                    <div class="col-md-4">
                        <label for="localitation-provincia">Ciudad</label>
                        
                        <select name="provincia" id="provincia" class="form-control">
                            <option value=>Seleccione</option>
                                
                        </select> 
                    </div>

                    <div class="col-md-4">
                        <label for="localitation-provincia">Universidad</label>
                        
                        <select name="provincia" id="provincia" class="form-control">
                            <option value="values0">Seleccione</option>
                                
                        </select> 
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