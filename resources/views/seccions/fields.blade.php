<!-- Seccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seccion', 'Sección:') !!}
    {!! Form::text('seccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado_id', 'Grado:') !!}
    {!! Form::text('grado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('seccions.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
</div>
