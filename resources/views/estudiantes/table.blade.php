@include('adminlte-templates::common.errors')

<table class="table display dt-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th style="display: none"></th>
            <th>Nombre</th>
            <th>Nacimiento</th>
            <th>Sexo</th>
            <th>Ci</th>
            <th>pago</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
            <tr>
                <td style="display: none">
                    <input type="checkbox"> 
                </td>
                <td>{!! $estudiante->nombre !!}, {!! $estudiante->apellido !!}</td>
                <td><b>{!! $estudiante->fechaNacimiento->format('d-M-y') !!}</b> ( {{$estudiante->edad }} )</td>
                <td>{!! $estudiante->sexo !!}</td>
                <td><b>{!! $estudiante->ci !!}</b></td>
                <td id="td_{!! $estudiante->id !!}">
                    <input id="checkbox-{!! $estudiante->id !!}" class="tgl tgl-danger tgl-on-success" type="checkbox" @if( $estudiante->acceso ) checked="checked @endif" style="cursor: pointer;">
                    <label for="checkbox-{!! $estudiante->id !!}"  onclick="changeAcceso({{$estudiante->acceso}},{{$estudiante->id}})"  title="Control de pago: Dependiendo del estado, los representantes podran ver o no las boletas."></label>
                    <span id="span_{!! $estudiante->id !!}" status="{{$estudiante->acceso}}">
                        @if ($estudiante->acceso) SI @else NO @endif
                    </span>
                </td>
                <td>
                    {!! Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('estudiantes.show', [$estudiante->id]) !!}" class='btn btn-default btn-xs' title="Ver los datos del estudiante"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('estudiantes.edit', [$estudiante->id]) !!}" class='btn btn-primary btn-xs' title="Editar datos del estudiante"><i class="glyphicon glyphicon-edit"></i></a>

                        <a href="#" onclick="return modalBoletaEstudiante({!!  $estudiante->id !!})" class='btn btn-warning btn-xs' title="Añadir nueva boleta"><i class="fa fa-book" aria-hidden="true"></i></a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','title' => 'Eliminiar estudiante', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
    <style>
        .disabled-td{ position: relative;}
        .disabled-td > *{ opacity: .2;}
        .disabled-td:before
        {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 1100;
        }
    </style>
</table>

@section('scripts')
    <script>

        function statusChange($span_status)
        {
            if($span_status.attr('status') == '1'){
                $span_status.attr('status', 0);
                $span_status.html('NO');
            }
            else{
                $span_status.attr('status', 1);
                $span_status.html('SI');
            }
        }

        function changeAcceso($checkbox,$id){
            $('#td_'+$id).addClass('disabled-td');
            statusChange($('#span_'+$id));
                $.ajax({
                    type: "GET",
                    url: "{{ url('approvedAccess') }}"+'/'+$id,
                    cache: false,
                    success: function(data) {
                        $.notify("Estado cambiado", "success");
                    },
                    error: function(jqXHR){
                        statusChange($('#span_'+$id));
                        var checkBoxes = $('#checkbox-'+$id);
                        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
                        $.notify(jqXHR.responseJSON.message, "error");
                    },
                    complete: function(){
                        $('#td_'+$id).removeClass('disabled-td');
                    }
                });
        }
    </script>
@endsection