@include('adminlte-templates::common.errors')
<table class="table table-responsive dt-table" id="representantes-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tlf</th>
            <th>Estudiante</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($representantes as $representante)
        <tr>
            <td>{!! $representante->nombre !!}</td>
            <td>{!! $representante->email !!}</td>
            <td>{!! $representante->tlf !!}</td>
            <td><a href="{{ url('estudiantes',[$representante->estudiante]) }}">{!! $representante->estudiante->nombreCompleto !!}</a></td>
            <td>
                {!! Form::open(['route' => ['representantes.destroy', $representante->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('representantes.show', [$representante->id]) !!}" class='btn btn-default btn-xs' title="Ver los datos del representante"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('representantes.edit', [$representante->id]) !!}" class='btn btn-primary btn-xs' title="Editar datos del representante"><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','title' => 'Eliminiar representante', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
