@extends('layout.main')

@section('title', 'Nueva Periodo')

@section('content')
  
	{!! Form::model($periodo, ['route' => 'periodos.store', 'method' => 'POST']) !!}
		
	@include('periodos._form')

	{!! Form::close() !!}

@endsection