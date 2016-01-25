{!! Form::open(['route' => 'employees.store', 'method' => 'POST']) !!}
  <div class="form-group">
	{!! Form::label('num_empleado', 'Numero de empleado') !!}
	{!! Form::text('num_empleado', null, [
		'class' => 'form-control',
		'placeholder' => 'Numero de empleado', 
		'required'
	]) !!}
</div>

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, [
		'class' => 'form-control',
		'placeholder' => 'Nombre', 
		'required'
	]) !!}
</div>

<div class="form-group">
	{!! Form::label('father_lastname', 'Apellido Paterno') !!}
	{!! Form::text('father_lastname', null, [
		'class' => 'form-control',
		'placeholder' => 'Apellido Paterno', 
		'required'
	]) !!}
</div>

<div class="form-group">
	{!! Form::label('mother_lastname', 'Apellido Materno') !!}
	{!! Form::text('mother_lastname', null, [
		'class' => 'form-control',
		'placeholder' => 'Apellido Materno', 
		'required'
	]) !!}
</div>

<div class="form-group">
	{!! Form::label('mother_lastname', 'Departamento') !!}
	{!! Form::select('deparment_id', $deparments, null, [
		'class' => 'form-control',
		'placeholder' => 'Seleccion un departamento', 
		'required'
	]) !!}
</div>

<div class="form-group">
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
