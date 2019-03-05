<div class="col-xs-12">
  <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header @if(!$estudiante->acceso) bg-red @else bg-aqua-active @endif">
      <h3 class="widget-user-username">{!! $estudiante->nombre !!} {!! $estudiante->apellido !!} ({!! $estudiante->id !!})</h3>
      @if (!Auth::guest())
        <span class="pull-right">
          {!! Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{!! route('estudiantes.edit', [$estudiante->id]) !!}" class='btn btn-primary btn-sm'><i class="glyphicon glyphicon-edit"></i>
                  Editar
                </a>

                <a href="{!! route('boletas.create', ['estudiante_id'=>$estudiante->id]) !!}" class='btn btn-warning btn-sm'><i class="fa fa-book" aria-hidden="true"></i>
                  Añadir Boleta
                </a>

            </div>
          {!! Form::close() !!}
        </span>
      @endif
      <h5 class="widget-user-desc">{!! $estudiante->email !!}</h5>
      <h5 class="widget-user-desc">
        @if($estudiante->sexo == 'M')
             <i class="fa fa-mars" aria-hidden="true"></i> M
        @else
             <i class="fa fa-venus" aria-hidden="true"></i> F
        @endif
         | CI:<b>{{$estudiante->ci }}</b>
      </h5>
      <h5 class="widget-user-desc pull-right">Ultima Actualizacion: {!! $estudiante->updated_at->format('d-M-Y') !!}</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="../img/default_avatar.jpg" alt="User Avatar">
    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-sm-3 border-right">
          <div class="description-block">
            <h5 class="description-header">Fecha de nacimiento</h5>
            <span class="description-text">{!! $estudiante->fechaNacimiento->format('d-M-Y') !!}</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3 border-right">
          <div class="description-block">
            <h5 class="description-header">Edad</h5>
            <span class="description-text">{{$estudiante->edad }}</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3">
          <div class="description-block">
            <h5 class="description-header">Sexo</h5>
            <span class="description-text">
                @if($estudiante->sexo == 'M')
                    <i class="fa fa-mars" aria-hidden="true"></i> MASCULINO
                @else
                    <i class="fa fa-venus" aria-hidden="true"></i> FEMENINO
                @endif

            </span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-3">
          <div class="description-block">
            <h5 class="description-header">Grado</h5>
            <span class="description-text">@if(isset($estudiante->seccion)) {!! $estudiante->seccion->nombre !!} @else N/A @endif</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
        <div class="col-sm-12">
          <div class="description-block">
            <h5 class="description-header">REPRESENTANTES</h5>
                @foreach ($estudiante->representantes as $representante)
                    <span class="description-text">
                       <b>{{ $representante->nombre }}</b>
                       {{ $representante->email }}
                       {{ $representante->tlf }}
                    </span><br>
                @endforeach
          </div>
          <!-- /.description-block -->
        </div>

      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.widget-user -->
</div>

@if(!$estudiante->acceso)
  <div style="padding: 20px 30px; margin-bottom: 20px;background: #F44336;text-align: center; z-index: 999999; font-size: 16px; font-weight: 600;">
    <h4 class="text-uppercase" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Debe cancelar la mensualidad para poder ver las boletas!</h4>
  </div>
@endif
{{-- @if( !Auth::guest() || $estudiante->acceso==1 ) --}}
@if ($estudiante->acceso)
  <div class="col-xs-12">
    <div class="box box-default box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Historial</h3>
        <div class="box-tools pull-right">
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        @foreach ($estudiante->boletas as $boleta)
        <div class="col-md-12">
          <ul class="timeline">
            <li class="time-label">
              <span class="bg-blue">
                {{$boleta->created_at->format('d-M-Y') }}
              </span>
            </li>
            <li>
                <i class="fa fa-book bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i></span>
                  <h3 class="timeline-header"><a href="#">Boleta</a> {{$boleta->updated_at}}</h3>
                    <div class="timeline-body col-sm-3">
                      <div class="mailbox-attachment-info">
                        <a href="{{ url($boleta->boleta)}}" target="_blank" class="mailbox-attachment-name mb-1"><i class="fa  fa-paperclip"></i>Boleta_{!! $boleta->estudiante->apellido !!}_{!! $boleta->seccion->seccion !!}</a>
                          <iframe src="{{ url($boleta->boleta) }}" width="100%" height="100%" frameborder="0"></iframe>
                          <div style="display: inline-block;">
                              <a href="{{ url($boleta->boleta) }}" class="btn btn-danger pull-right"
                               download="boleta_{{$estudiante->updated_at->format('d-M-Y-h:m:s')}}"><i class="fa fa-cloud-download"></i></a>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="box">
                            {{ $boleta->observacion}}
                        </div>
                    </div>
                </div>
            </li>
          </ul>
        </div>
        @endforeach
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
@endif