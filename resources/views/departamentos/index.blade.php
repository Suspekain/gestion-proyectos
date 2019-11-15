@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamentos</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
  </tr>
  @if (isset($departamentos))
  @foreach ($departamentos as $departamento)
  <tr>
    <td>{{$departamento->id}}</td>
    <td>{{$departamento->nombre}}</td>
    <td>{{$departamento->email}}</td>
    <td>{{$departamento->telefono}}</td>
  </tr>
  @endforeach
  @endif

  </table>
  @if (isset($departamento))
  <p>{{$departamento}}</p>
  @endif

@endsection
