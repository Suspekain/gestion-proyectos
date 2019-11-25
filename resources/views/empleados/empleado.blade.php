@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Empleado nº {{$empleado->id}}</h2>
<li>Nombre: {{$empleado->nombre}}</li>
<li>Apellido: {{$empleado->apellido}}</li>
<li>Email: {{$empleado->email}}</li>
<li>Telefono: {{$empleado->telefono}}</li>
<li>Responsable de proyecto: <a href="{{route('proyecto.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></li>

@endsection
