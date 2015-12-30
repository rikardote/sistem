@extends('layout.main')

@section('title', 'Editar ' . $qna->description)

@section('content')
  
  {!! Form::model($qna, ['route' => ['qnas.update', $qna->id], 'method' => 'PATCH']) !!}
    
   @include('qnas._form')

  {!! Form::close() !!}

@endsection