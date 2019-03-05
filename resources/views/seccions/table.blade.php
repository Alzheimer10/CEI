<table class="table table-responsive dt-table" id="seccions-table">
    <thead>
        <tr>
            <th>Sección</th>
            <th>Grado</th>
            <th class="text-right">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($seccions as $seccion)
        <tr>
            <td>{!! $seccion->seccion !!}</td>
            <td>{!! $seccion->grado->grado !!}</td>
            <td class="text-right">
                {!! Form::open(['route' => ['seccions.destroy', $seccion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('seccions.edit', [$seccion->id]) !!}" class='btn btn-default btn-xs' title="Modificar seccion"><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','title'=>'Eliminar seccion', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>