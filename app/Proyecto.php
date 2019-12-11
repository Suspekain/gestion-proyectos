<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model {
  protected $table = 'proyectos';
  public function empleado() {
    return $this->belongsToMany('App\Empleado')->withPivot('fechainicio','fechafin');
  }
}
