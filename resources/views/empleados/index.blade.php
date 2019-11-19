@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Empleados</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Responsable de proyecto</th>
    <th>Departamento</th>
  </tr>

  @if (isset($empleados))
  @foreach ($empleados as $empleado)
  <tr>
    <td><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->id}}</a></td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->email}}</td>
    <td>{{$empleado->telefono}}</td>
    <td><a href="{{route('proyecto.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->id}}</a></td>
    <td><a href="{{route('departamento.show', $empleado->departamento->id)}}">{{$empleado->departamento->id}}</a></td>
  </tr>
  @endforeach
  @endif

</table>
@if (isset($empleado))
<h2>Empleado nº {{$empleado->id}}</h2>
<li>Nombre: {{$empleado->nombre}}</li>
<li>Apellido: {{$empleado->apellido}}</li>
<li>Email: {{$empleado->email}}</li>
<li>Telefono: {{$empleado->telefono}}</li>
<li>Responsable de proyecto: <a href="{{route('proyecto.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></li>
@endif

@endsection
