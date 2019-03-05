<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Tlf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telefono', 'Tlf:') !!}
    {!! Form::text('tlf', null, ['class' => 'form-control']) !!}
</div>

<!-- Estudiante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estudiante_id', 'Estudiante:') !!}
    <select name="estudiante_id" id="estudiante_id" class="form-control selectpicker" required="true" data-live-search='true'>
        <option value="">Estudiante</option>
        @foreach (\App\Models\estudiante::all() as $estudiante)
            @if (isset($representante))
                @if ($estudiante->id==$representante->estudiante_id)
                    <option value="{{$estudiante->id}}" selected="true">{{$estudiante->nombre}}, {{$estudiante->apellido}}</option>
                @endif
            @endif
            <option value="{{$estudiante->id}}">{{$estudiante->nombre}}, {{$estudiante->apellido}}</option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    @if( Request::is('representantes/*/edit') )
        <a href="{!! route('representantes.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
    @else
        <a href="#" class="btn btn-default" data-dismiss="modal" aria-label="Close">@lang('app.cancel')</a>
    @endif
</div>