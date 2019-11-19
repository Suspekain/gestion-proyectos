@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Inicio</th>
    <th>Fecha fin</th>
    <th>Horas estimadas</th>
    <th>Empleado responsable</th>
  </tr>

  @if(isset($proyectos))
  @foreach ($proyectos as $proyecto)
  <tr>
    <td><a href="{{route('proyecto.show', $proyecto->id)}}">{{$proyecto->id}}</a></td>
    <td>{{$proyecto->nombre}}</td>
    <td>{{$proyecto->titulo}}</td>
    <td>{{$proyecto->fechainicio}}</td>
    <td>{{$proyecto->fechafin}}</td>
    <td>{{$proyecto->horasestimadas}}</td>
    <td><a href="{{route('empleado.show', $proyecto->empleado_id)}}">{{$proyecto->empleado_id}}</a></td>
  </tr>
  @endforeach
  @endif

</table>

@if (isset($proyecto))
<h2>Proyecto nº {{$proyecto->id}}</h2>
<li>Nombre: {{$proyecto->nombre}}</li>
<li>Titulo: {{$proyecto->titulo}}</li>
<li>Inicio: {{$proyecto->fechainicio}}</li>
<li>Fin: {{$proyecto->fechafin}}</li>
<li>Horas: {{$proyecto->horasestimadas}}</li>
<li>Responsable de proyecto: <a href="{{route('empleado.show', $proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a></li>

@endif

@endsection
