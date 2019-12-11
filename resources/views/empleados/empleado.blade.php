@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Empleado nº {{$empleado->id}}</h2>
<li>Nombre: {{$empleado->nombre}}</li>
<li>Apellido: {{$empleado->apellido}}</li>
<li>Email: {{$empleado->email}}</li>
<li>Telefono: {{$empleado->telefono}}</li>
<li>Departamento: <a href="{{route('departamento.show', $empleado->departamento->id)}}">{{$empleado->departamento->id}}</a></li>
<li>Colaboraciones:
  <ul>
    @foreach($empleado->proyecto as $proyecto)
    <li><a href="{{route('proyecto.show', $proyecto->id)}}">{{$proyecto->nombre}}</a></li>
    @endforeach
  </ul>
</li>


@endsection
