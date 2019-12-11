@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento nº {{$departamento->id}}</h2>
<li>Nombre: {{$departamento->nombre}}</li>
<li>Jefe de departamento: <a href="{{route('empleado.show', $departamento->jefe)}}">{{$departamento->jefe}}</a></li>
<li>Empleados: </li>
@foreach ($departamento->empleado as $empleado)
<ul><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->nombre}}</a></ul>
@endforeach
</td>
</tr>
</table>

@endsection
