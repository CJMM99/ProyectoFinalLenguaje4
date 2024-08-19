@extends('layout.plantilla')

@section('titulo', 'Lista de Pacientes')

@section('contenido')
<h1>Pacientes</h1>
<span><a class="btn btn-primary" href="{{ route('pacientes.create') }}">Nuevo</a></span>

@if(session('mensaje'))
<div class="alert alert-success" role="alert">
    {{ session('mensaje') }}
</div>
@endif
<table  class="table table-striped">
    <thead>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Genero</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
        <th scope="row">{{ $paciente->id }} </th>
            <td> <a href="{{ route('pacientes.show',['paciente'=>$paciente->id]) }}">{{ $paciente->nombre }}</a></td>
            <td>{{ $paciente->edad }}</td>
            <td>{{ $paciente->genero}}</td>
            <td>
                <div class="btns">
                <a class="btn btn-warning btn-sm" href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a>
                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar el paciente?')">Eliminar</button>
                        </form>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
{{$pacientes->links()}}
@endsection