@extends('layout.main')

@section('title', $deparment->exists ? 'Editar ' .$deparment->description: 'Nuevo Departamento')

@section('content')
  
	{!! Form::model($deparment, [
		'method' => $deparment->exists ? 'put' : 'post', 
		'route' => $deparment->exists ? ['deparments.update', $deparment->code] : ['deparments.store']

		]) !!}
		  
      @include('deparments._form')
  
	{!! Form::close() !!}

@endsection