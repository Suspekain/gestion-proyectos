@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamentos</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Empleados</th>
  </tr>
  @if (isset($departamentos))
  @foreach ($departamentos as $departamento)
  <tr>
    <td><a href="{{route('departamento.show', $departamento->id)}}">{{$departamento->id}}</a></td>
    <td>{{$departamento->nombre}}</td>
    <td>{{$departamento->email}}</td>
    <td>{{$departamento->telefono}}</td>
    <td>
      @foreach ($departamento->empleado as $empleado)
      <li><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->nombre}}</a></li>
      @endforeach
    </td>
  </tr>
  @endforeach
  @endif

  </table>
  @if (isset($departamento))
  <p>{{$departamento}}</p>
  @endif

@endsection
