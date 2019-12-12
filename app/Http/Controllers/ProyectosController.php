<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectosController extends Controller
{
  public function index() {
    $proyectos = Proyecto::all();
    return view('proyectos.index', ['proyectos'=>$proyectos]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id) {
    return view('proyectos.proyecto', ['proyecto' => Proyecto::find($id)]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id) {
    $proyecto = Proyecto::find($id);
    return view('proyectos.edit',['proyecto'=>$proyecto]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id) {
    $proyecto = Proyecto::find($id);
    $proyecto->nombre = $request->input('nombre');
    $proyecto->titulo = $request->input('titulo');
    $proyecto->fechainicio = $request->input('fechainicio');
    $proyecto->fechafin = $request->input('fechafin');
    $proyecto->horasestimadas = $request->input('horasestimadas');
    $proyecto->save();
    $proyectos = Proyecto::all();
    return view('proyectos.index',['proyectos'=>$proyectos]);
  }


  public function delete($id){
    Proyecto::where("id",$id)->delete();
    $proyectos=Proyecto::all();
    return view("proyectos.index",['proyectos'=>$proyectos]);
  }
}
