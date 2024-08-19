@extends('layout.plantilla')

@section('titulo', 'Lista de Doctores')

@section('contenido')
<h1>Doctores</h1>
<table  class="table table-striped">
    <thead>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">especialidad</th>
    </thead>
    <tbody>
        @foreach($doctores as $doctore)
        <tr>
        <th scope="row">{{ $doctore->id }} </th>
            <td> <a href="{{ route('doctores.show',['doctore'=>$doctore->id]) }}">{{ $doctore->nombre }}</a></td>
            <td>{{ $doctore->especialidad }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
{{$doctores->links()}}
@endsection