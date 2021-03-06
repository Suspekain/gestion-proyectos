@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos</h2>
<a href="{{route('proyecto.create')}}"><button type="button" class="btn btn-dark">Nuevo Proyecto</button></a>
<hr>
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

  @foreach ($proyectos as $proyecto)
  <tr>
    <td><a href="{{route('proyecto.show', $proyecto->id)}}">{{$proyecto->id}}</a></td>
    <td>{{$proyecto->nombre}}</td>
    <td>{{$proyecto->titulo}}</td>
    <td>{{$proyecto->fechainicio}}</td>
    <td>{{$proyecto->fechafin}}</td>
    <td>{{$proyecto->horasestimadas}}</td>
    <td><a href="{{route('empleado.show', 1)}}">{{$proyecto->empleado_id}}</a></td>
    <td><a href="{{route('proyecto.edit', $proyecto->id)}}">Editar</a></td>
    <td><a href="{{route('proyecto.delete', $proyecto->id)}}">Eliminar</a></td>
  </tr>
  @endforeach
</table>

@endsection
