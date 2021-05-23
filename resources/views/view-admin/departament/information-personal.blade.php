@extends('view-admin.authentication-master')

@section('title','Informacion')


@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/information-personal') }}"><i class="fas fa-users nav-link"></i>Informacion Personal</a> 
    </li>
@endsection


@section('contenet')
<div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class ="title"><i class="fas fa-users"></i>Informacion Personal</h2>
            </div>
            <div class="inside">
                {!! Form::open(['url' => '/admin/information-personal'])!!}
                    <div class="row">
                        <div class="col-md-4">
                        {!! Form::Label('text','Nombres')!!}
                            <div class="name" style="font-size: 15px;">
                                <input type="text" name="" id="" value='{{Auth::user()->name}}' class = "form-control" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            {!! Form::Label('text','Apellidos')!!}
                            <div class="lastName" style="font-size: 15px;">
                                <input type="text" name="" id="" value='{{Auth::user()->lastName}}' class = "form-control" disabled>
                            </div>
                        </div>

                        <div class="col-md-8">
                            {!! Form::Label('text','Correo electrónico')!!}
                            <div class="lastName" style="font-size: 15px;">
                                <input type="text" name="" id="" value='{{Auth::user()->email}}' class = "form-control" disabled>
                            </div>
                        </div>

                        <div class="col-md-8">
                        {!! Form::Label('text','Telefono')!!}
                            <input type="text" name="" id="email" value='{{Auth::user()->telefono}}' class = "form-control" disabled>
                        <br>
                        </div>            
                    </div>
                    {!! Form::submit('Editar',['class'=>'btn btn-success margin-top-16'])!!}
                {!! Form::close()!!}
            </div>
        </div>
    </div>

@endsection