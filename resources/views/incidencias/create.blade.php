@extends('layout.main')

@section('title', 'Nueva Incidencia')

@section('content')
  
	{!! Form::model($incidencia, ['route' => 'incidencias.store', 'method' => 'POST']) !!}
		
	 @include('incidencias._form')

	{!! Form::close() !!}

@endsection

@section('js')
<script type="text/javascript">
  $(function() {
    $( "#datepicker_inicial" ).datepicker();
  });
  </script>
<script>
$.datepicker.setDefaults($.datepicker.regional['es-MX']);
$('#datepicker_inicial').datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    firstDay: 1,
    onClose: function () {
        $('#datepicker_final').val(this.value);
    }
});
$('#datepicker_final').datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    firstDay: 1
});
</script> 
@endsection