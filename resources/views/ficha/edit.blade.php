@extends('layout')
@section('title', 'Pacientes')
@section('pacienteActive', 'active')
@section('pacienteShow', 'show')

@section('ficha_paciente')
<nav>
  <div class="nav nav-tabs" id="nav-tab-2" role="tablist">
    <a class="nav-item nav-link active" id="nav-paciente-tab" data-toggle="tab" href="#nav-paciente"  role="tab" aria-controls="nav-paciente" aria-selected="false">Antecedentes del paciente</a>
    <a class="nav-item nav-link" id="nav-salud-tab" data-toggle="tab" href="#nav-salud" role="tab" aria-controls="nav-salud" aria-selected="false">Antecedentes de salud</a>
    <a class="nav-item nav-link" id="nav-ayuda-tab" data-toggle="tab" href="#nav-ayuda" role="tab" aria-controls="nav-ayuda" aria-selected="false">Ayudas técnicas</a>
    <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false">Antecedentes sociales</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent-2">
  <div class="tab-pane fade active show" id="nav-paciente" role="tabpanel" aria-labelledby="nav-paciente-tab">@include('ficha.ant_paciente')</div>
  <div class="tab-pane fade" id="nav-salud" role="tabpanel" aria-labelledby="nav-salud-tab">@include('ficha.ant_salud')</div>
  <div class="tab-pane fade" id="nav-ayuda" role="tabpanel" aria-labelledby="nav-ayuda-tab">@include('ficha.ayudas_tecnicas')</div>
  <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">@include('ficha.ant_sociales')</div>
</div>
@endsection