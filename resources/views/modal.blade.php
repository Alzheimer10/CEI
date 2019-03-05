		<!-- BEGIN # MODAL Estudiante -->
		<div class="modal fade" id="ModalEstudiante" tabindex="-1" role="dialog" aria-labelledby="ModalEstudiante" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" align="center">
						Nuevo Estudiante
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>

	            	<div class="box-body">
						<div class="row">
	                    	{!! Form::open(['route' => 'estudiantes.store']) !!}
	                    	  	@include('estudiantes.fields')
	                	    {!! Form::close() !!}
						</div>
					</div>
		            
				</div>
			</div>
		</div>
		<!-- END # MODAL Estudiante -->

		<!-- BEGIN # MODAL Representante -->
		<div class="modal fade" id="ModalRepresentante" tabindex="-1" role="dialog" aria-labelledby="ModalRepresentante" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" align="center">
						Nuevo Representante
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>

	            	<div class="box-body">
						<div class="row">
	                    	{!! Form::open(['route' => 'representantes.store']) !!}
	                    	  	@include('representantes.fields')
	                	    {!! Form::close() !!}
						</div>
					</div>
		            
				</div>
			</div>
		</div>
		<!-- END # MODAL Representante -->

		<!-- BEGIN # MODAL Representante -->
		<div class="modal fade" id="ModalBoleta" tabindex="-1" role="dialog" aria-labelledby="ModalBoleta" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" align="center">
						Nueva boleta
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>

	            	<div class="box-body">
						<div class="row">
	                    	{!! Form::open(['route' => 'boletas.store','enctype' => 'multipart/form-data']) !!}
	                    	  	@include('boletas.fields')
	                	    {!! Form::close() !!}
						</div>
					</div>
		            
				</div>
			</div>
		</div>
		<!-- END # MODAL Representante -->

		<!-- BEGIN # MODAL Representante -->
		<div class="modal fade" id="boleta" tabindex="-1" role="dialog" aria-labelledby="boleta" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>

	            	<div class="box-body" style="height: 400px">
	            		<iframe width="100%" height="100%" id="urlBoleta" src="" frameborder="0" marginheight="20" marginwidth="35" 
scrolling="auto"></iframe>	
					</div>
				</div>
			</div>
		</div>
		<!-- END # MODAL Representante -->