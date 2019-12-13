<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validation extends FormRequest {
  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'nombre' => 'required',
      'titulo' => 'required',
      'inicio' => 'required',
      'final' => 'required|after:inicio',
      'horas' => 'required'
    ];
  }
}
