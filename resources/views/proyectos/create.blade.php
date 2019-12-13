@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Crear proyecto</h2>
<form class="form" action="{{route('proyecto.store')}}" method="post">
  @csrf
  <label>Nombre: </label><input type="text" name="nombre" value=""><br>
  @if ($errors->has('nombre'))
	<b>{{$errors->first('nombre')}}</b>
  @endif<br>
  <label>Titulo: </label><input type="text" name="titulo" value=""><br>
  @if ($errors->has('titulo'))
	<b>{{$errors->first('titulo')}}</b>
  @endif<br>
  <label>Fecha inicio: </label><input type="date" name="fechainicio" value=""><br>
  @if ($errors->has('fechainicio'))
	<b>{{$errors->first('fechainicio')}}</b>
  @endif<br>
  <label>Fecha fin: </label><input type="date" name="fechafin" value=""><br>
  @if ($errors->has('fechafin'))
  <b>{{$errors->first('fechafin')}}</b>
  @endif<br>
  <label>Horas estimadas: </label><input type="number" name="horasestimadas" value=""><br>
  @if ($errors->has('horasestimadas'))
  <b>{{$errors->first('horasestimadas')}}</b>
  @endif<br>
  <input type="submit" name="crear" value="Crear">
</form>
@endsection
