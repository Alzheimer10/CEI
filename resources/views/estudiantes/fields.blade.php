<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','required' => 'true']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','required' => 'true']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fecha Nacimiento:') !!}
    @if( \Request::route()->getName()=='estudiantes.edit' )
        {!! Form::date('fechaNacimiento', $estudiante->fechaNacimiento->format('Y-m-d'), ['class' => 'form-control','required' => 'true']) !!}
    @else
        {!! Form::date('fechaNacimiento', null, ['class' => 'form-control','required' => 'true']) !!}
    @endif
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::text('ci', null, ['class' => 'form-control','required' => 'true']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sexo', 'Sexo:') !!}
    <label class="radio-inline">
        {!! Form::radio('sexo', "M", null,['required' => 'true']) !!} M
    </label>

    <label class="radio-inline">
        {!! Form::radio('sexo', "F", null) !!} F
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    @if( Request::is('estudiantes/*/edit') )
        <a href="{!! route('estudiantes.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
    @else
        <a href="#" class="btn btn-default" data-dismiss="modal" aria-label="Close">@lang('app.cancel')</a>
    @endif
</div>
