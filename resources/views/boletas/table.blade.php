@include('adminlte-templates::common.errors')
<table class="table table-responsive dt-table" id="boletas-table">
    <thead>
        <tr>
            <th>Año</th>
            <th>Trimestre</th>
            <th>Estudiante</th>
            <th>Boleta</th>
            <th>Observación</th>
            <th>Sección</th>
            <th class="text-right">Acción</th>
        </tr>
    </thead>
    <tbody>


    @foreach($boletas as $boleta)
        <tr>
            <td>{!! $boleta->a_escolar !!}</td>
            <td>{!! $boleta->trimestre !!}</td>
            <td><a href="{{ route('estudiantes.show', $boleta->estudiante->id ) }}" title="CI: {{ $boleta->estudiante->ci}}">{!! $boleta->estudiante->nombre !!} , {!! $boleta->estudiante->apellido !!}</a></td>
            {{--
            <td><a href="{{ url('/') }}{!! $boleta->boleta !!}" target="_blank">{!! $boleta->boleta !!}</a></td>
            --}}
            {{-- <td><a href="#" onclick="return modalBoleta('{{ url('/') }}{!! $boleta->boleta !!}')" ><i class="fa fa-search-plus" aria-hidden="true"></i> VER</a></td> --}}
            <td><a href="{{ url('/') }}{!! $boleta->boleta !!}" target="_blank" title=" {{$boleta->boleta}}"><i class="fa fa-search-plus" aria-hidden="true"></i> VER</a></td>
            <td style="word-break: break-all;">{!! $boleta->observacion !!}</td>
            <td>{!! $boleta->seccion->seccion !!}</td>
            <td class="text-right">
                {!! Form::open(['route' => ['boletas.destroy', $boleta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('boletas.edit', [$boleta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
