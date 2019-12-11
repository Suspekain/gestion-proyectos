@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto nº {{$proyecto->id}}</h2>
<li>Nombre: {{$proyecto->nombre}}</li>
<li>Titulo: {{$proyecto->titulo}}</li>
<li>Fecha de inicio: {{$proyecto->fechainicio}}</li>
<li>Fecha de fin: {{$proyecto->fechafin}}</li>
<li>Horas estimadas: {{$proyecto->horasestimadas}}</td>
<li>Empleado Responsable: <a href="{{route('empleado.show', $proyecto->empleado_id)}}">{{$proyecto->empleado_id}}</a></li>
<li>Colaboradores:
  <ul>
    @foreach($proyecto->empleado as $e)
    <li><a href="{{route('empleado.show', $e->id)}}">{{$e->nombre}}</a></li>
    @endforeach
  </ul>
</li>
@endsection
