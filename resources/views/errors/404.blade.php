@extends('layouts.app')
@section('content')
  <div>
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="error-page">
          <h2 class="headline text-yellow"> 404</h2>

          <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i>Oops! Página no encontrada.</h3>
            <p>No pudimos encontrar la página que estabas buscando. Mientras tanto, <a href=" {{ url('/') }}" class="text-yellow">puede regresar</a>.</p>
          </div>
          <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </div>
    
  @endsection