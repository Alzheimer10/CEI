<div class="li-search"></div>

<li class="treeview menu-open {{ Request::is('estudiantes*') ? 'active' : '' }}">
  <a href="#">
    <i class="fa fa-users"></i>
    <span>Estudiantes</span>
    <small class="label pull-right bg-blue">{{$appController->countEstudiantes()}}</small>
    <span class="pull-right-container" style="display: none">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="{{ route('estudiantes.index') }}"  title="Ver el listado de los estudiantes." data-position="left"><i class="fa fa-circle-o {{ Request::is('estudiantes') ? 'text-red' : '' }}"></i>@lang('app.all')</a>
    </li>
    <li>
      <a  href="#" role="button" data-toggle="modal" data-target="#ModalEstudiante" title="Añadir nuevo estudiante al sistema." data-position="left">
        <i class="fa fa-circle-o {{ Request::is('estudiantes/create*') ? 'text-red' : '' }}"></i>@lang('app.new')
      </a>
    </li>
  </ul>
</li>


<li class="treeview menu-open {{ Request::is('representantes*') ? 'active' : '' }}">
  <a href="#">
    <i class="fa fa-graduation-cap"></i>
    <span>Representantes</span>
    <small class="label pull-right bg-yellow">{{$appController->countRepresantes()}}</small>
    <span class="pull-right-container" style="display: none">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li>
      <a href="{{ route('representantes.index') }}"  title="Ver el listado de los representantes." data-position="left"><i class="fa fa-circle-o {{ Request::is('representantes') ? 'text-red' : '' }}"></i>@lang('app.all')</a>
    </li>
    <li>
      <a  href="#" role="button" data-toggle="modal" data-target="#ModalRepresentante"  title="Añadir nuevo representante al sistema." data-position="left">
        <i class="fa fa-circle-o {{ Request::is('representante/create*') ? 'text-red' : '' }}"></i>@lang('app.new')
      </a>
    </li>

  </ul>
</li>

<li class="treeview menu-open {{ Request::is('boletas*') ? 'active' : '' }}">
  <a href="#">
    <i class="fa fa-files-o"></i>
	<span>Boletas</span>
	<small class="label pull-right bg-green">{{$appController->countBoletas()}}</small>
    <span class="pull-right-container" style="display: none">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{ route('boletas.index') }}"  title="Ver el listado de todas las boletas" data-position="left"><i class="fa fa-circle-o {{ Request::is('boletas') ? 'text-green' : '' }}"></i>@lang('app.all')</a></li>
    <li>
      <a  href="#" role="button" data-toggle="modal" data-target="#ModalBoleta"  title="Añadir nueva boleta." data-position="left">
        <i class="fa fa-circle-o {{ Request::is('boletas/create*') ? 'text-red' : '' }}"></i>@lang('app.new')
      </a>
    </li>
  </ul>
</li>

<li class="{{ Request::is('grados*') ? 'active' : '' }}">
    <a href="{!! route('grados.index') !!}"  title="Administrar los grados." data-position="left"><i class="fa fa-graduation-cap"></i>
    	<span>Grados</span>
    	<small class="label pull-right bg-blue">{{$appController->countGrados()}}</small>
    </a>
</li>

<li class="{{ Request::is('seccions*') ? 'active' : '' }}">
    <a href="{!! route('seccions.index') !!}"  title="Administrar las secciones." data-position="left"><i class="fa fa-pie-chart"></i>
    	<span>Secciones</span>
    	<small class="label pull-right bg-blue">{{$appController->countSecciones()}}</small>
    </a>
</li>


<li class="header">OTROS</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('reporte') }}"  target="_blank" title="Reporte de todos los estudiantes." data-position="left"><i class="fa fa-circle-o text-blue"></i><span>Reporte</span>
    </a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"  title="Usuarios del sistema." data-position="left"><i class="fa fa-circle-o text-red"></i><span>Usuarios</span>
      <small class="label pull-right bg-red">{{$appController->countUsers()}}</small>
    </a>
</li>

<li class="{{ Request::is('configuracion*') ? 'active' : '' }}" style="display: none">
    <a href="#"><i class="fa fa-circle-o text-blue"></i><span>Configuracion</span></a>
</li>

<li class="treeview menu-open {{ Request::is('documentation*') ? 'active' : '' }}">
    <a href="#" title="Documentacion del sistema." data-position="left"><i class="fa fa-book text-yellow"></i><span>Documentacion</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li>
            <a href="{{ route('documentation',['1']) }}"><i class="fa fa-circle-o"></i>Agregar estudiante</a>
        </li>
        <li>
            <a href="{{ route('documentation',['2']) }}"><i class="fa fa-circle-o"></i>Ver estudiantes</a>
        </li>

    </ul>
</li>