@extends('view-static.master_static')

@section('title','Home')
@section('home')
    @if (Route::has('login'))
                <div class="hidden fixed sm:block ">
                    @auth
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}" class="text-sm text-gray-700 underline"></a></li>
                        
                    @else
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
     @endif
@stop

@section('content')
<div class="tumbs"> 
    @foreach($departamento as $departamentos)       
     <div class="tumb">
        <div class="tumb-image">
            <img src="{{ url ('/uploads/'.$departamentos->file_path.'/t_'.$departamentos->foto_principal) }}" alt="Foto">
        </div> 
            <div class="contenido">    
                <h4>Direccion:</h4>
                <h5>{{$departamentos->direccion}}</h5>
                <h4>{{$departamentos->descripcion}}</h4>
                Ubicado en la provincia de: {{$departamentos->provincias->nombre_provincia}}
            </div>
     </div>
     @endforeach 
</div>
@stop  