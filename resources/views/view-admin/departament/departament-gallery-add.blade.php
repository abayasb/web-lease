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
                {!!Form::open(['url'=>'/admin/gallery/departament/'.$departament->id_departamento.'/gallery/add','files'=>true,'id'=>'form_departament_galley'])!!}
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
                                <img src="{{ url('/uploads/'.$departament->file_path.'/'.$departament->foto_principal) }}" alt="Foto_Principal" class="img-fluid">    
                                
                        </div>
                    </div>  
                        <hr style="border:105px;">

                    <div class="row gallery_departament">
                        <h3>Agregar mas fotos a tu departamento</h3>
                        {!! Form::File('imagen',
                                                [
                                                    'class'=>'custom-file-input',
                                                    'id'=>'gallery_add_departament',
                                                    'accept'=>'image/*',
                                                    'required'
                                                ])!!}                  
                        <br>
                        <div class="btn-submit">
                            <input type="submit" value="Enviar" class="btn">
                            <a href="" id="btn_gallery_add" ><img src="\static\img\add.png" alt="" class ="icono"></a>
                        </div>
                        <div class="tumbs">
                            @foreach($departament->fotos as $foto)
                                <div class="tumb">
                                    <a href="{{ url ('/admin/gallery/departament/'.$departament->id_departamento.'/gallery/'.$foto->id_gallery.'/delete')}}"  data-toogle="tooltip" data-placement="top" title="Eliminar">
                                        <i class = "fas fa-trash-alt"></i>   
                                    </a>
                                    <img src="{{ url ('/uploads/'.$foto->file_path.'/t_'.$foto->file_name) }}" alt="">
                                </div>
                               
                            @endforeach
                        </div>
                    </div>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection