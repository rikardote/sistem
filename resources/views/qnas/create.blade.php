@extends('layout.main')

@section('title', 'Nueva Qna')

@section('content')
  
	{!! Form::model($qna, ['route' => 'qnas.store', 'method' => 'POST']) !!}
		
	@include('qnas._form')

	{!! Form::close() !!}

@endsection