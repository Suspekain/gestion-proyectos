@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamentos</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Jefe</th>
  </tr>
  @foreach ($departamentos as $departamento)
  <tr>
    <td><a href="{{route('departamento.show', $departamento->id)}}">{{$departamento->id}}</a></td>
    <td>{{$departamento->nombre}}</td>
    <td><a href="{{route('empleado.show', $departamento->jefe)}}">{{$departamento->jefe}}</a></td>
  </tr>
  @endforeach

  </table>

@endsection
