<nav class="navbar-wrapper">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">IPAC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('resenas') }}">Reseña</a></li>
            <li><a href="{{ url('beneficios') }}">Beneficios</a></li>
            <li><a href="{{ url('criterios') }}">Criterios</a></li>
            <li><a href="{{ url('organo-encargado') }}">Órgano Encargado</a></li>
          </ul>
        </li> -->
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Propuestas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('propuestas.crear') }}">Proponer</a></li>
            @if (Auth::user())
            <li><a href="{{ url('consultar') }}">Consultar</a></li>
            @endif
            <li><a href="{{ url('proteccion-personal') }}">Protección Personal</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Estadísticas <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('mapa-geografico') }}">Mapa Geográfico</a></li>
                <li><a href="{{ url('eje-tematico') }}">Eje Temático</a></li>
                <li><a href="{{ url('respuestas-pendientes') }}">Estado propuestas</a></li>
            </ul>
        </li>
        <li><a href="{{ url('contacto') }}">Contacto</a></li>
    </ul>
    @if (Auth::guest())
        <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ url('propuestas') }}">Registro</a></li>
            <li data-menu="IniciarSesion">
                <a href="{{ url('propuestas/#iniciar_sesion') }}">Iniciar Sesion</a>
            </li>
        @endif
        </ul>
    @else    
        <ul class="nav navbar-nav registrar">
            <li>
                <a><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a>                                    
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-off"></span> Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>