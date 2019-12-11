<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model {

  protected $table = 'empleados';
  protected $fillable = ['nombre', 'apellido', 'email', 'telefono'];
  public function empleados() {
    return $this->hasMany('App\Empleado');
  }
  public function departamento() {
    return $this->belongsTo('App\Departamento');
  }
  public function proyecto() {
    return $this->belongsToMany('App\Proyecto')->withPivot('fechainicio','fechafin');
  }
}
