@extends('view-lease.authentication')


@section('title','Login')

<!-- Iniciamos la estructura del contenudi -->
@section('content')
    
    

    <div class="container container-login shadow p-3 mb-5 bg-body rounded">
        <div class="header">
            <a href="{{ url('/')}}">
                <img src="{{ '/static/img/logo.png'}}" alt="">
            </a>
        </div>

        <div class="container-general">

        {!! Form::open(['url' => '/login']) !!}
        <label for="email">Correo electrónico:</label>
        <div class="input-group">
                <div class="input-group-text">
                    <i class="far fa-envelope"></i>
                </div>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <label for="password" class="margin-top-16">Contraseña:</label>
        <div class="input-group">
                <div class="input-group-text">
                <i class="fas fa-key"></i>
                </div>
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div><br>
        
        {!! Form::submit('Ingresar',['class'=>'btn btn-success'])!!}
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
                <a href="{{ url('/register')}}">¿No tienes una cuenta?, Registrate</a>
                <a href="{{ url('/')}}">Recuperar contraseña</a> 
            </div>
        </div>
        
        

    </div>
     
<!-- Finalizamos la seccion del contenido  -->
@stop 