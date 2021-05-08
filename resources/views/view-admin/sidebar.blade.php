<div class="sidebar shadow" >
    <div class="section-top">
        <div class="logo">
            <img src="{{ '/static/img/logo.png'}}"  class= "img-fluid" alt="">
        </div>
        <div class="user">
            <span class = "subtitle">Hola:</span>
            <div class="name">
                {{Auth::user()->name}} {{Auth::user()->lastName}}
                <a href="{{ url('/logout')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Salir">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>

            <div class="email">
            {{Auth::user()->email}}
            </div>
        </div>
    </div>

    <div class="main">
        <ul>
            <li>
                <a href="{{'/admin'}}"><i class="fas fa-home"></i>Inicio</a>
            </li>
            <li>
                <a href="{{'/admin/departament'}}"><i class="fas fa-box"></i>Adepartamento</a>
            </li>
            <li>
                <a href="{{'/admin/information-personal'}}"><i class="fas fa-users"></i>Datos Personales</a>
            </li>

            <li>
                <a href="{{'/admin/gallery'}}"><i class="fa fa-picture-o"></i>Galeria</a>
            </li>


        </ul>
    </div>
</div>