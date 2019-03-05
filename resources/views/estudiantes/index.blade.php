@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Listado de los estudiantes</h1>
        <h1 class="pull-right">
            <a  href="#" role="button" data-toggle="modal" data-target="#ModalEstudiante" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" title="Añadir nuevo estudiante" data-position="left">
                @lang('app.new')
            </a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
            @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body table-responsive">
                @include('estudiantes.table')
            </div>
        </div>
    </div>
@endsection

