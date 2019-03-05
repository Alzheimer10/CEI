@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Listado de los representantes</h1>
        <h1 class="pull-right">
            <a  href="#" role="button" data-toggle="modal" data-target="#ModalRepresentante" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" title="Agregar nuevo representantes" data-position="left">
                  @lang('app.new')
            </a>
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('representantes.table')
            </div>
        </div>
    </div>
@endsection

