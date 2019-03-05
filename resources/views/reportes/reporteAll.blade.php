@extends('reportes.layout')
@section('content')
	<h1>LISTADO COMPLETO</h1>
	<table style="width: 100%">
		<thead>
			<tr>
				<th>nombre</th>
				<th>ci</th>
				<th>edad</th>
				<th>fecha de nacimiento</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($estudiantes as $index => $estudiante)
				<tr @if ($index%2 == 0) style="background: #33333326" @endif>
					<td style="text-transform: capitalize;">{{ $estudiante->apellido }}, {{ $estudiante->nombre }}</td>
					<td>{{ $estudiante->ci }}</td>
					<td>{{$estudiante->edad }}</td>
					<td>{{ $estudiante->fechaNacimiento->format('Y-m-d') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection