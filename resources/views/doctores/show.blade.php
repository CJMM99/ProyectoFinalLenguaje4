@extends('layout.plantilla')

@section('titulo', 'Detalles Doctor')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .nota-container {
        text-align: center;
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 20px;
        position: relative; 
    }

    table {
        border-collapse: collapse;
        width: 100%;
        height: 200px;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    td:last-child {
        border-bottom: none;
    }


    .btn-volver {
        background-color: #3498db;
        color: #fff;
        border: 1px solid #3498db;
        padding: 10px 20px;
        border-radius: 50px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-volver:hover {
        background-color: #581845;
        color: white;
        box-shadow: 
        0 0 5px #581845,
        0 0 20px #581845,
        0 0 60px #581845,
        0 0 150px #581845;
        transform: scale(1.1);
        opacity: 100%;
    }
</style>

@section('contenido')

<div class="nota-container">
    <h3>Datos del doctor "{{ $doctore->nombre }}"</h3>

    <table>
        <tbody>
            <tr>
                <td>
                    <strong>Nombre: </strong> {{ $doctore->nombre }} <p></p>
                    <strong>Especialidad:</strong> {{ $doctore->especialidad }} <br>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('doctores.indexdoctor') }}" class="btn-volver">Volver</a>
</div>

<h2>Pacientes</h2>
<table class="table">
  <thead>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Genero</th>
  </thead>
  <tbody>
    @forelse($doctore->pacientes as $paciente)
      <tr>
        <td>{{ $paciente->nombre }}</td>
        <td> {{ $paciente->edad}}</td>
        <td>{{$paciente->genero}}</td>
      </tr>
    @empty
      <tr>
        <td colspan="2">
          El doctor no tiene pacientes
        </td>
      </tr>

    @endforelse
  </tbody>
</table>

@endsection
