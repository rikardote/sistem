@extends('layout.main')

@section('title', 'Editar ' . $deparment->description)

@section('content')
  
  {!! Form::model($deparment, ['route' => ['deparments.update', $deparment->code], 'method' => 'PUT']) !!}
    
    @include('deparments._form')
  {!! Form::close() !!}

@endsection