@extends('layout.main')

@section('title', 'Editar ' . $periodo->periodo.'/'.$periodo->year)

@section('content')
  
  {!! Form::model($periodo, ['route' => ['periodos.update', $periodo->id], 'method' => 'PATCH']) !!}
    
   @include('periodos._form')

  {!! Form::close() !!}

@endsection