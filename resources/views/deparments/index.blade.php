@extends('layout.main')

@section('title', 'Departamentos')

@section('content')
{!! link_to_route('deparments.create', 'Nuevo Departamentos', [], ['class' => 'btn btn-info'])  !!}
	<table class="table table-striped">
		<thead>
			<th>Codigo</th>
			<th>Descripcion</th>
			
			<th>Accion</th>
		</thead>
		<tbody>
		@foreach($deparments as $deparment)
			<tr>
			 <td>{{ $deparment->code }}</td>
			 <td>{{ $deparment->description }}</td>
			 
			 <td>
			 	<a href="{{ route('deparments.edit', $deparment->code) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			 	<a href="{{ route('deparments.destroy', $deparment->code) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			 </td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection