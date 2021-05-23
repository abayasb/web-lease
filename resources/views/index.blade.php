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

    
    <table border=1>
    <thead>
        <tr>
            <th style="width:300px">
                <img src="static\img\Departamento_Uno.jpeg" alt="" width="100%">
            </th>  
            <th style="width:500px">
                PROVINCIA: GUAYAS <br>
                CANTON: MILAGRO
                CUARTO PEQUEÑO <BR>
                BAÑO PRIVADO <br>
                INCLUYE LOS SERVICIO BASICOS DE: <br>
                <ul>
                    <li>AGUA</li>
                    <li>INTERNET</li>
                </ul>

                Precio: 150$ en efectivo no negociable
            </th>               
        </tr>
        </thead>

        <tbody>    
        </tbody>
    </table>
@stop