@inject('appController','App\Services\appController')
<!-- A Escolar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('a_escolar', 'Año Escolar:') !!}
    {!! Form::select('a_escolar', $appController->Anos(), null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

<!-- Trimestre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trimestre', 'Trimestre:') !!}
    {!! Form::select('trimestre', ['ENERO - ABRIL' => 'ENERO - ABRIL', 'MAYO - JULIO' => 'MAYO - JULIO', 'SEPTIEMBRE - DICIEMBRE' =>'SEPTIEMBRE - DICIEMBRE'], null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

<!-- Estudiante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estudiante_id', 'Estudiante:') !!}
    <select name="estudiante_id" id="estudiante_id" class="form-control selectpicker" required="true" data-live-search='true'>
        <option value="">Estudiante</option>
        @foreach (\App\Models\estudiante::all() as $estudiante)
            @if (isset($boleta))
                @if ($estudiante->id==$boleta->estudiante_id)
                    <option value="{{$estudiante->id}}" selected="true">{{$estudiante->nombre}}, {{$estudiante->apellido}}</option>
                @endif
            @endif
            <option value="{{$estudiante->id}}">{{$estudiante->nombre}}, {{$estudiante->apellido}}</option>
        @endforeach
    </select>
</div>

<!-- Seccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seccion_id', 'Seccion:') !!}
    {!! Form::select('seccion_id', \App\Models\seccion::all()->pluck('seccion','id'), null, ['class' => 'form-control', 'required' => 'true'])!!}
</div>

{{-- <!-- Boleta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('boleta', 'Boleta:') !!}
    {!! Form::text('boleta', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Url Field -->
@if(isset($boleta))
    <div class="box-body col-sm-12">
        <div class="box">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="file" name="file" type="file">
        </div>
    </div>
@else
    <div class="box-body col-sm-12">
        <div class="box">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="file" name="file" type="file" required>
        </div>
    </div>
@endif
<!-- Observacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control', 'maxlength' => '500','rows' => '5', 'title' => 'Maximo de carácteres (500)']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    @if( Request::is('boletas/*/edit'))
        <a href="{!! route('boletas.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
    @elseif(Request::is('boletas/create'))
        <a href="{!! route('estudiantes.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
    @else
        <a href="#" class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancel</a>
    @endif
</div>
