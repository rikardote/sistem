@extends('layout.main')

@section('title', 'Periodos')

@section('content')
{!! link_to_route('periodos.create', 'Nueva Periodo', [], ['class' => 'btn btn-info'])  !!}
	<table class="table table-striped">
		<thead>
			<th>Periodo</th>
			<th>Año</th>
			
			<th>Accion</th>
		</thead>
		<tbody>
		@foreach($periodos as $periodo)
			<tr>
			 <td>{{ $periodo->periodo }}</td>
			 <td>{{ $periodo->year }}</td>
			 
			 <td>
			 	<a href="{{ route('periodos.edit', $periodo->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			 	<a href="{{ route('periodos.destroy', $periodo->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			 </td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection