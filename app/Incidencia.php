<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencias';

    protected $fillable = ['qna_id', 'employee_id', 'fecha_inicio', 'fecha_final', 'codigodeincidencia_id', 'periodo_id', 'token'];

    public function employee()
    {
      return $this->belongsTo('App\employe');
    }
    public function qna()
    {
      return $this->belongsTo('App\qna');
    }
    public function codigodeincidencia()
    {
        return $this->belongsTo('App\Codigo_De_Incidencia');
    }
     public function periodo()
    {
      return $this->belongsTo('App\periodo');
    }
    public function setPeriodoIdAttribute($value) 
    {
      $this->attributes['periodo_id'] = $value ?: null;
    }
      public function getQnaAttribute($value)
    {
        return str_pad($value, 2, '0', STR_PAD_LEFT);
    }
    public static function getIncidencias($qna_id)
    {
      $conteo_total = DB::raw('count(*) as total');
      $incidencias = Incidencia::getQuery()
                 ->select('*','employees.id as empleado_id','incidencias.id as inc_id' ,'qnas.year as qna_year','periodos.year as periodo_year','periodos.periodo as periodo_p', DB::raw($conteo_total))
                 ->leftJoin('employees', 'employees.id', '=', 'incidencias.employee_id')
                 ->leftJoin('qnas', 'qnas.id', '=', 'incidencias.qna_id')
                 ->leftJoin('periodos', 'periodos.id', '=', 'incidencias.periodo_id')
                 ->leftJoin('codigos_de_incidencias', 'codigos_de_incidencias.id', '=', 'incidencias.codigodeincidencia_id')
                 ->where('qna_id', $qna_id)
                 ->groupBy('token')
                 ->orderBy('num_empleado', 'ASC')
                 ->orderBy('fecha_inicio', 'ASC')
                 ->get();
     return $incidencias;
    }
  



}
