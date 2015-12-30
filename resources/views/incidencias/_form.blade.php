<div class="form-group">
  {!! Form::label('qna_id', 'Qna') !!}
  
 {!! Form::select('qna_id', $qnas, null, [
    'class' => 'form-control',
    'placeholder' => 'Selecciona una Qna', 
    'required'
  ]) !!}
</div>
  
<div class="form-group">
  {!! Form::label('employee_id', 'Empleado') !!}
  {!! Form::select('employee_id', $employees, null, [
    'class' => 'form-control',
    'placeholder' => 'Selecciona un Empleado', 
    'required'
  ]) !!}

</div>

<div class="form-group">
  {!! Form::label('codigodeincidencia_id', 'Codigo de Incidencia') !!}
  {!! Form::select('codigodeincidencia_id', $codigosdeincidencias, null, [
    'class' => 'form-control',
    'placeholder' => 'Selecciona una incidencia', 
    'required'
  ]) !!}

</div>

<div class="form-group">
  {!! Form::label('fecha_inicio', 'Fecha Inicial') !!}
  {!! Form::text('fecha_inicio', null, [
    'class' => 'form-control',
    'placeholder' => 'Fecha Inicial', 
    'required',
    'id' => 'datepicker_inicial'
  ]) !!}

</div>
<div class="form-group">
  {!! Form::label('fecha_final', 'Fecha Final') !!}
  {!! Form::text('fecha_final', null, [
    'class' => 'form-control',
    'placeholder' => 'Fecha Final', 
    'required',
    'id' => 'datepicker_final'
  ]) !!}

</div>

<div class="form-group">
  {!! Form::label('periodo_id', 'Periodo') !!}
  {!! Form::select('periodo_id', $periodos, null, [
    'class' => 'form-control',
    'placeholder' => 'Selecciona un Periodo'
    
  ]) !!}

</div>

<div class="form-group">
  {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>