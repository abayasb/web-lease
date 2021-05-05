@extends('view-lease.authentication')


@section('title','Registrase')

<!-- Iniciamos la estructura del contenudi -->
@section('content')
    
    <div class="container container-register shadow p-3 mb-5 bg-body rounded">
        <div class="header">
            <a href="{{ url('/')}}">
                <img src="{{ '/static/img/logo.png'}}" alt="">
            </a>
        </div>

        <div class="container-general">
            {!! Form::open(['url' => '/register']) !!}
            <div class="row">
                <div class="col">
                    <label for="name">Nombre</label>
                </div>
                <div class="col">
                    <label for="lastName">Apellido</label>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                   <div class="input-group">
                    <div class="input-group-text">
                        <i class="fas fa-user"></i>
                    </div>
                    {!! Form::text('name',null,['class'=>'form-control','required'])!!}
                   </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        {!! Form::text('lastName',null,['class'=>'form-control','required'])!!}
                   </div>
                </div>
            </div>

            <label for="email" class="margin-top-16">Correo electrónico:</label>
            <div class="input-group">
                    <div class="input-group-text">
                        <i class="far fa-envelope"></i>
                    </div>
                {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
            </div>

            <label for="password" class="margin-top-16">Contraseña:</label>
            <div class="input-group">
                    <div class="input-group-text">
                    <i class="fas fa-key"></i>
                    </div>
                {!! Form::password('password', ['class' => 'form-control','required']) !!}
            </div>

            <label for="confirm-password" class="margin-top-16">Confimar contraseña:</label>
            <div class="input-group">
                    <div class="input-group-text">
                    <i class="fas fa-key"></i>
                    </div>
                {!! Form::password('confirm-password', ['class' => 'form-control','required']) !!}
            </div>
            
            {!! Form::submit('Registrarse',['class'=>'btn btn-success margin-top-16'])!!}
            {!! Form::close()!!}

            @if(Session::has('message'))
                <div class="containers">
                    <div class="alert alert-{{Session::get('alert')}}" style="display: none;">
                        <!-- {{Session::get('alert')}} -->
                        {{Session::get('message')}}
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <script>
                            $('.alert').slideDown();
                            setTimeout(function(){$('.alert').slideUp();},5000);
                        </script>
                    </div>
                </div>
            @endif
            <div class="footer margin-top-16">
                <a href="{{ url('/login')}}">¿Ya tengo cuenta, Ingresar</a>
            </div> 
        </div>
        
        
    
    </div>
     
<!-- Finalizamos la seccion del contenido  -->
@stop 