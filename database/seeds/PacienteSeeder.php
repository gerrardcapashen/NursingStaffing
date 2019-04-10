<?php

use App\Paciente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
        	'Nombre' => 'Juanito Perez',
        	'Rut' => '12345678-9',
        	'FechaNacimiento' => '1986-01-01',
        	'Direccion' => 'Los Copihues #456',
        	'Comuna' => 'Santiago',
        	'TelefonoFijo' => '223456789',
        	'celular' => '92345678',
        	'EstadoCivil' => 'Soltero/a',
        	'CentroAtencionUrgencia' => 'Las Lilas',
        	'MedicoTratante' => 'Roberto Encina',
        	'InicioCuidados' => '2019-04-07',
        	'Activo' => '1',
        ]);


        factory(Paciente::class, 10)->create();
    }
}