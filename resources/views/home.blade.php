@extends('layouts.app')

@section('content')

<section class="content">
      <!-- Info boxes -->
    <div class="row">

		<div class="col-md-6">
		  <!-- USERS LIST -->
		  <div class="box box-success">
		    <div class="box-header with-border">
		      <h3 class="box-title">Ultimas modificaciones</h3>

		    	<div class="box-tools pull-right">
		    		<span class="label label-danger">4</span>
		    		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		    		</button>
		    		<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
		    		</button>
		    	</div>
		    </div>
		    <!-- /.box-header -->
		    <div class="box-body no-padding">
		    	<ul class="users-list clearfix">
		    		@foreach ($lastEstudiantes as $estudiante)
		        		<li>
		        		  <img src="{{ asset('img/default_avatar.jpg') }}" alt="User Image">
		        		  <a class="users-list-name" href="#" title="{{ $estudiante->nombre }}, {{ $estudiante->apellido }}">{{ $estudiante->nombre }}, {{ $estudiante->apellido }}</a>
		        		  <span class="users-list-date">{{$estudiante->updated_at}}</span>
		        		</li>
		    		@endforeach
		    	</ul>
		      <!-- /.users-list -->
		    </div>
		    <!-- /.box-body -->
		    <div class="box-footer text-center">
		      <a href="{{ url('estudiantes') }}" class="uppercase">Ver todo los estudiantes</a>
		    </div>
		    <!-- /.box-footer -->
		  </div>
		  <!--/.box -->
		</div>

		<div class="col-md-6">
		  <!-- USERS LIST -->
			<div class="box box-warning">
				<div class="box-header with-border">
				  	<h3 class="box-title">Añadir nueva boleta</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
				    {!! Form::open(['route' => 'boletas.store','enctype' => 'multipart/form-data']) !!}
				        @include('boletas.fields')
				    {!! Form::close() !!}
				  <!-- /.users-list -->
				</div>
			</div>
		  <!--/.box -->
		</div>
    </div>
</section>

@endsection
