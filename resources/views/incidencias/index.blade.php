@extends('layout.main')

@section('title', 'Incidencias')

@section('content')
{!! link_to_route('incidencias.create', 'Nueva incidencia', [], ['class' => 'btn btn-info'])  !!}
	<table class="table table-striped">
		<thead>
			<th>Qna ID</th>
			<th>Empleado</th>
			<th>Codigo</th>
			<th>Fecha Inicial</th>
			<th>Fecha Final</th>
			<th>Periodo</th>
			<th>Accion</th>

		</thead>
		<tbody>
		@foreach($incidencias as $incidencia)
			<tr>
			 <td>{{ $incidencia->qna->qna }}/{{ $incidencia->qna->year }}</td>
			 <td>{{ $incidencia->employee->father_lastname }} {{ $incidencia->employee->mother_lastname }} {{ $incidencia->employee->name }}</td>
			 <td>{{ $incidencia->codigodeincidencia->code }}</td>
			 <td>{{ $incidencia->fecha_inicio }}</td>
			 <td>{{ $incidencia->fecha_final }}</td>
			 
			 @if(isset($incidencia->periodo->periodo))
					 <td>{{ $incidencia->periodo->periodo }}/{{ $incidencia->periodo->year }}</td>
			 @else
			 			<td></td>
			 @endif
			 <td>
			 	<a href="{{ route('incidencias.edit', $incidencia->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			 	<a href="{{ route('incidencias.destroy', $incidencia->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			 </td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection