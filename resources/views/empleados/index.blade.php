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
    <th>Departamento</th>
  </tr>

  @foreach ($empleados as $empleado)
  <tr>
    <td><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->id}}</a></td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->email}}</td>
    <td>{{$empleado->telefono}}</td>
    <td><a href="{{route('departamento.show', $empleado->departamento_id)}}">{{$empleado->departamento_id}}</a></td>
  </tr>
  @endforeach

</table>

@endsection
