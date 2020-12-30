<li class="header">NAVEGACIÓN PRINCIPAL</li>
<li>
  <a href="{{ url('dashboard') }}">
    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
  </a>
</li>

  @if(Auth::user()->hasRole(['admin', 'editor']))
    <li class="treeview">
      <a href="#">
        <i class="fa fa-home"></i> <span>Administrar contenido</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li class="treeview">
          <a href="#"><i class="fa fa-photo"></i> Banners
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('admin/banners') }}"><i class="glyphicon glyphicon-record"></i> Administración</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-newspaper-o"></i> Contenido
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('admin/contenido') }}"><i class="glyphicon glyphicon-record"></i> Administración</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-newspaper-o"></i> Publicaciones
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ route('publicaciones.inicio') }}"><i class="glyphicon glyphicon-record"></i> Administración</a></li>
          </ul>
        </li>
      </ul>
    </li>
  @endif
  @if(Auth::user()->hasRole(['admin', 'manager']))
    <li class="treeview">
      <a href="#">
        <i class="fa fa-building"></i>
        <span>Instituciones</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ url('admin/instituciones') }}"><i class="glyphicon glyphicon-record"></i> Administración</a></li>
      </ul>
    </li>
  @endif
  @if(Auth::user()->hasRole(['admin']))
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>Ususarios</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ url('admin/usuarios') }}"><i class="glyphicon glyphicon-record"></i> Administración</a></li>
      </ul>
    </li>
  @endif
  @if(Auth::user()->hasRole(['admin']))
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>Roles y permisos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ url('admin/roles') }}"><i class="glyphicon glyphicon-record"></i> Administración roles</a></li>
        <li><a href="{{ url('admin/permisos') }}"><i class="glyphicon glyphicon-record"></i> Administración permisos</a></li>
      </ul>
    </li>
  @endif
  @if(Auth::user()->hasRole(['admin', 'manager', 'institutional_analyst', 'analyst_institutions']))
    <li class="treeview">
      <a href="#">
        <i class="fa fa-file-text"></i>
        <span>Propuestas</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ url('admin/propuestas') }}"><i class="glyphicon glyphicon-record"></i> Administración</a></li>
      </ul>
    </li>
  @endif