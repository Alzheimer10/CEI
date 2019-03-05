<!-- Nombre Field -->
<div class="form-group col-sm-6 {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 {{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'true']) !!}
</div>

@if(Request::is('users/create'))

    <!-- Nombre Field -->
    <div class="form-group col-sm-6 {{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Contraseña:') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'true']) !!}
    </div>

    <!-- Nombre Field -->
    <div class="form-group col-sm-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        {!! Form::label('password_confirmation', 'Contraseña:') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'true']) !!}
    </div>

@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">@lang('app.cancel')</a>
</div>
