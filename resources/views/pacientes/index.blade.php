@extends('layout')
@section('title', 'Pacientes')
@section('pacienteActive', 'active')
@section('pacienteShow', 'show')

@section('content')
@include('pacientes.tabs')
    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($pacientes as $paciente)
            <li>{{ $paciente->Nombre }}</li>
        @empty
            <li>No hay pacientes registrados.</li>
        @endforelse
    </ul>
@endsection