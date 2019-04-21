@extends('layout-2')
@section('title', 'Pacientes')

@section('pacientes')
    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($pacientes as $paciente)
            <li>{{ $paciente->Nombre }}</li>
        @empty
            <li>No hay pacientes registrados.</li>
        @endforelse
    </ul>

@endsection