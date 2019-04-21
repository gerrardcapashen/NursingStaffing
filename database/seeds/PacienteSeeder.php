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
        	'nombre' => 'Juanito Perez',
        	'rut' => '12345678-9',
        	'fechaNacimiento' => '1986-01-01',
        	'direccion' => 'Los Copihues #456',
        	'comuna' => 'Santiago',
        	'telefonoFijo' => '223456789',
        	'celular' => '92345678',
        	'estadoCivil' => 'Soltero/a',
        	'centroAtencionUrgencia' => 'Las Lilas',
        	'medicoTratante' => 'Roberto Encina',
        	'inicioCuidados' => '2019-04-07',
        	'activo' => '1',
        ]);


        factory(Paciente::class, 10)->create();
    }
}