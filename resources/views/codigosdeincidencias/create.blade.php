@extends('layout.main')

@section('title', $incidencia->exist ? 'Editar Incidencia' : 'Nueva Incidencia')

@section('content')
  
	{!! Form::model($incidencia, [
		'method' => $incidencia->exist ? 'put' : 'post', 
		'route' => $incidencia->exist ? ['codigosdeincidencias.update', $incidencia->id] : ['codigosdeincidencias.store']

		]) !!}
		
	 @include('codigosdeincidencias._form')

	{!! Form::close() !!}

@endsection