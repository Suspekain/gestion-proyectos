<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {
  protected $table = 'departamentos';
  public function departamentos() {
    return $this->hasMany('App\Departamento');
  }
  public function empleado() {
    return $this->hasMany('App\Empleado');
  }
  public function jefe() {
    return $this->hasOne('App\Empleado','jefe_id','id');
  }
}
