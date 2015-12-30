@extends('layout.main')

@section('title', 'Editar ' . $employe->name)

@section('content')
  
  {!! Form::model($employe, ['route' => ['employees.update', $employe->num_empleado], 'method' => 'PATCH']) !!}
    
   @include('employees._form')

  {!! Form::close() !!}

@endsection