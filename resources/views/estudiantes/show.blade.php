@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estudiantes.show_fields')
                    <a href="{{ url()->previous() }}" class="btn btn-default">@lang('app.back')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
