@extends('layouts.app')

@section('content')
<div class="content">
	<div class="box-body">
	    <div class="row">
			<div class="col-xs-12">
				<div class="panel-group" id="accordion">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
							  Agregar Estudiante</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse {{ Request::is('documentacion/1') ? 'in' : '' }}">
							<div class="panel-body">
								@include('documentacion.secciones.addEstudiantes')
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
							  Mostrar los Estudiantes</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse {{ Request::is('documentacion/2') ? 'in' : '' }}">
							<div class="panel-body">
								@include('documentacion.secciones.verEstudiantes')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
