@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento nº {{$departamento->id}}</h2>
<li>Nombre: {{$departamento->nombre}}</li>
<li>Empleados: </li>
@foreach ($departamento->empleado as $empleado)
<ul><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->nombre}}</a></ul>
@endforeach
</td>
</tr>
</table>

@endsection
