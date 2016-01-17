<?php

namespace App;

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
  



}
