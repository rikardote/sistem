@extends('layout.main')

@section('title', 'Editar ' . $incidencia->description)

@section('content')
  
  {!! Form::model($incidencia, ['route' => ['codigosdeincidencias.update', $incidencia->code], 'method' => 'PATCH']) !!}
    
   @include('codigosdeincidencias._form')

  {!! Form::close() !!}

@endsection