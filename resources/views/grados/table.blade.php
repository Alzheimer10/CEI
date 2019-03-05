<table class="table table-responsive dt-table" id="grados-table">
    <thead>
        <tr>
            <th>Grado</th>
            <th class="text-right">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($grados as $grado)
        <tr>
            <td>{!! $grado->grado !!}</td>
            <td class="text-right">
                {!! Form::open(['route' => ['grados.destroy', $grado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('grados.edit', [$grado->id]) !!}" class='btn btn-default btn-xs' title="Modificar grado"><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','title'=>'Eliminar grado', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
