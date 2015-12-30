<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employees';

    protected $fillable = ['num_empleado', 'name', 'father_lastname', 'mother_lastname', 'deparment_id'];

    public function deparment()
    {
    	return $this->belongsTo('App\Deparment');
    }
    public function incidencia()
    {
        return $this->hasMany('App\Incidencia');
    }

    public function setnameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
    public function setfatherlastnameAttribute($value)
    {
        $this->attributes['father_lastname'] = strtoupper($value);
    }
    public function setmotherlastnameAttribute($value)
    {
        $this->attributes['mother_lastname'] = strtoupper($value);
    }
    public function getEmployeeAttribute($value)
    {
        return str_pad($value, 5, '0', STR_PAD_LEFT);
    }
}
