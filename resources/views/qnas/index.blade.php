@extends('layout.main')

@section('title', 'Qnas')

@section('content')
{!! link_to_route('qnas.create', 'Nueva qna', [], ['class' => 'btn btn-info'])  !!}
	<table class="table table-striped">
		<thead>
			<th>Qna</th>
			<th>Año</th>
			<th>Descripcion</th>
			
			<th>Accion</th>
		</thead>
		<tbody>
		@foreach($qnas as $qna)
			<tr>
			 <td>{{ $qna->qna }}</td>
			 <td>{{ $qna->year }}</td>
			 <td>{{ $qna->description }}</td>
			 
			 <td>
			 	<a href="{{ route('qnas.edit', $qna->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
			 	<a href="{{ route('qnas.destroy', $qna->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			 </td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection