@extends('layout.main')

@section('title', 'Incidencias')

@section('content')
{!! link_to_route('codigosdeincidencias.create', 'Nueva incidencia', [], ['class' => 'btn btn-info'])  !!}
	<table class="table table-striped">
		<thead>
			<th>Codigo</th>
			<th>Descripcion</th>
			
			<th>Accion</th>
		</thead>
		<tbody>
		@foreach($incidencias as $incidencia)
			<tr>
			 <td>{{ $incidencia->code }}</td>
			 <td>{{ $incidencia->description }}</td>
			 
			 <td>
			 	<a href="{{ route('codigosdeincidencias.edit', $incidencia->code) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			 	<a href="{{ route('codigosdeincidencias.destroy', $incidencia->code) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			 </td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection