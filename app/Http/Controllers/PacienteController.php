<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::get();
        //this->withoutExceptionHandling();
        $title = 'Listado de pacientes';
        $asdf = 'S';
        
        return view('ficha.index', compact('title','pacientes','asdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // añadir funcionalidades del controlador y vistas para el paciente!!!
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->Nombre = $request['Nombre'];
        $paciente->FechaNacimiento = $request['FechaNacimiento'];
        $paciente->Direccion = $request['Direccion'];
        $paciente->Comuna = $request['Comuna'];
        $paciente->TelefonoFijo = $request['TelefonoFijo'];
        $paciente->Celular = $request['Celular'];
        $paciente->EstadoCivil = $request['EstadoCivil'];
        $paciente->CentroAtencionUrgencia = $request['CentroAtencionUrgencia'];
        $paciente->MedicoTratante = $request['MedicoTratante'];
        $paciente->InicioCuidados = $request['InicioCuidados'];
        $paciente->Activo = 1;
        $paciente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        $paciente = Paciente::get();
        return view('ficha.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        // hacer VISTA ESPECIAL PARA esta accion y cambiar la ficha.index a otra
        $title = 'Editando paciente';
        $asdf = 'S';

        //dd($paciente->nombre);
        return view('ficha.edit', [
            'paciente' => $paciente, 
            'title' => $title,
            'asdf' => $asdf,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
