@extends('layout.plantilla')

@section('titulo', 'Formulario de Pacientes')

@section('contenido')
<h1> {{ isset($cliente) ? 'Editar Paciente': 'Crear un nuevo Paciente' }}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method='post' action="{{ isset($paciente) ? route('pacientes.update', $paciente->id):route('pacientes.store') }}" class="m-3">
@if(isset($paciente))  
  @method('put')
@endif
@csrf
<div>
  <div class="">
    <div class="form-floating">
      <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" name="nombre" value="{{ isset($paciente) ? $paciente->nombre : old('nombre')}}">
      <label for="nombre">Nombre</label>
    </div>
    </div> <p></p>
    <div class="">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="edad" name="edad" value="{{ isset($paciente) ? $paciente->edad : old('edad')}}">
            <label for="edad">Edad</label>
        </div>
    </div> <p></p>
    <div class="form-floating col-4">
        <select name="genero" id="genero" class="form-control">
            <option value="femenino" {{ (isset($paciente) && ($paciente->genero == 0 || strtolower($paciente->genero) == 'femenino')) || old('genero') == 0 ? 'selected' : '' }}>Femenino</option>
            <option value="masculino" {{ (isset($paciente) && ($paciente->genero == 1 || strtolower($paciente->genero) == 'masculino')) || old('genero') == 1 ? 'selected' : '' }}>Masculino</option>
        </select>
    </div>

</div> <p></p>


<button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection
