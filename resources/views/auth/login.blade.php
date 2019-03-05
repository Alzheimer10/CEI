@extends('auth.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/ceiLogin.css') }}">
@endsection

@section('content')
    <div class="login-logo">
        U.E Luisa del <b>Valle Silva</b>
    </div>
    <div class="login-reg-panel">
        <div class="login-info-box" @if ( $errors->has('ci') || ( !$errors->has('ci') && !$errors->has('email') && !$errors->has('password') ))  style="display: none" @endif>
            <h2>Soy Representante?</h2>
            <label id="label-register" for="log-reg-show">SI</label>
            <input type="radio" name="active-log-panel" id="log-reg-show" @if ( $errors->has('ci') || ( !$errors->has('ci') && !$errors->has('email') && !$errors->has('password') )) checked="checked" @endif>
        </div>

        <div class="register-info-box" @if ( !$errors->has('ci') && ( $errors->has('email') || $errors->has('password') ))  style="display: none" @endif>
            <h2>Soy Administrador?</h2>
            <label id="label-login" for="log-login-show">SI</label>
            <input type="radio" name="active-log-panel" id="log-login-show" @if ( !$errors->has('ci') && ( $errors->has('email') || $errors->has('password') )) checked="checked" @endif>
        </div>

        <div class="white-panel @if ( !$errors->has('ci') && ( $errors->has('email') || $errors->has('password') )) right-log @endif">

            <div class="login-show @if ( $errors->has('ci') || ( !$errors->has('ci') && !$errors->has('email') && !$errors->has('password') )) show-log-panel @endif">
                 {!! Form::open(['route' => ['estudiantes.representante'], 'method' => 'get']) !!}
                <div class="row">
                    <p style="margin-bottom:0px">Representante</p>
                    <h2 style="margin-top: 0px">CEDULA DEL NIÑO</h2>
                    <input type="text" class="form-control" name="ci" value="{{ old('ci') }}" placeholder="CEDULA" required title="Ingrese la cedula correspondiente a su niñ@.">
                        @if ($errors->has('ci'))
                            <span class="help-block">
                            <strong>{{ $errors->first('ci') }}</strong>
                        </span>
                        @endif
                    <input type="button" value="?" class="hidden-xs pull-left help" style="padding-left: 10px; padding-right: 10px; width: auto" title=" Solo caracteres numéricos. Ejemplo: 123456789">
                    <input type="submit" value="BUSCAR">
                </div>
                <div class="row" style="margin-top: 1rem">
                    <div class="alert alert-info" role="alert"><a href="{{ asset('documentacion/PLANILLA DE INSCRIPCION REGULARES 18-19.docx') }}" style="margin: 0px; padding: 0px">DESCARGAR LA PLANILLA DE INSCRIPCION REGULARES</a></div>                 
                </div>
                {!! Form::close() !!}
            </div>

            <div class="register-show @if ( !$errors->has('ci') && ( $errors->has('email') || $errors->has('password') )) show-log-panel @endif">
                <form method="post" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <p style="margin-bottom:0px">Administrador</p>
                    <h2 style="margin-top: 0px">INICIO DE SESIÓN</h2>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <input type="button" value="?" class="hidden-xs pull-left help" style="padding-left: 10px; padding-right: 10px; width: auto" title="Esta sección no es para los representante. <br> Ingrese todos los campos.">
                    <input type="submit" value="ENTRAR">
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('resources/tippy/tippy.js') }}"></script>
    <script>
        tippy('*:not(.help)',{
            followCursor: true,
        });
        tippy('.help',{
            trigger: 'click'
        });

        $('.login-reg-panel input[type="radio"]').on('change', function() {
            if($('#log-login-show').is(':checked')) {
                $('.register-info-box').fadeOut(); 
                $('.login-info-box').fadeIn();
                
                $('.white-panel').addClass('right-log');
                $('.register-show').addClass('show-log-panel');
                $('.login-show').removeClass('show-log-panel');
                
            }
            else if($('#log-reg-show').is(':checked')) {
                $('.register-info-box').fadeIn();
                $('.login-info-box').fadeOut();
                
                $('.white-panel').removeClass('right-log');
                
                $('.login-show').addClass('show-log-panel');
                $('.register-show').removeClass('show-log-panel');
            }
        });
    </script>
@endsection