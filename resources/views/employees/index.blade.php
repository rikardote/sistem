@extends('layout.main')

@section('title', 'Empleados')

@section('content')
 
  <a data-url="{{ route('employees.create') }}" class="load-form-modal  panelColorGreen" data-toggle ="modal" data-target='#form-modal'>
    <span class="fa fa-plus-circle fa-2x" aria-hidden='true'></span>
  </a> 

	<table class="table table-striped">
		<thead>
			<th>Num Empleado</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Nombre</th>
			<th>Departamento</th>
			<th>Accion</th>
		</thead>
		<tbody>
		@foreach($employees as $employe)
			<tr>
			 <td>{{ $employe->num_empleado }}</td>
			 <td>{{ $employe->father_lastname }}</td>
			 <td>{{ $employe->mother_lastname }}</td>
			 <td>{{ $employe->name }} </td>
			 <td>{{ $employe->deparment->description }}</td>
			 <td>
			 	
			 	<a data-url="{{ route('employees.edit', $employe->num_empleado) }}" class="load-form-modal  panelColorGreen" data-toggle ="modal" data-target='#form-modal'>
			 		<span class="fa fa-plus-circle fa-2x" aria-hidden='true'></span>
  				</a> 
			 	<a href="{{ route('employees.destroy', $employe->num_empleado) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
			 </td>
			</tr>
		@endforeach
		</tbody>
	</table>

	@include('modals.form-modal', ['title'=>'Agregar/Modificar Empleados'])
    @include('modals.confirmation_modal', ['title'=>'Confirmation Modal'])
@endsection