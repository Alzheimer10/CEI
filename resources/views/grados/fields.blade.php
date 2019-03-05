<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado', 'Nombre del grado:') !!}
    {!! Form::text('grado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('grados.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
</div>
