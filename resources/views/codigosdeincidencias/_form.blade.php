<div class="form-group">
  {!! Form::label('code', 'Codigo') !!}
  
  {!! Form::text('code', null, [
    'class' => 'form-control',
    'placeholder' => 'Codigo de la incidencia', 
    'required'
  ]) !!}
</div>
  
<div class="form-group">
  {!! Form::label('description', 'Descripcion') !!}
  {!! Form::text('description', null, [
    'class' => 'form-control',
    'placeholder' => 'Descripcion', 
    'required'
  ]) !!}
</div>

<div class="form-group">
  {!! Form::label('grupo', 'Grupo') !!}
  {!! Form::select('grupo', ['1' => 'Incidencias','2' => 'Licencias','3' => 'Vacaciones','4' => 'Otros' ], null, [
    'class' => 'form-control',
    'placeholder' => 'Seleccione un grupo de incidencias', 
    'required'
  ]) !!}
</div>


<div class="form-group">
  {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>