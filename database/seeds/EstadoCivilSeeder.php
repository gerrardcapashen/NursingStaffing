<?php

use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_civil')->insert(['estado' => 'Soltero/a']);
    	DB::table('estado_civil')->insert(['estado' => 'Casado/a']);
        DB::table('estado_civil')->insert(['estado' => 'Conviviente Civil']);
        DB::table('estado_civil')->insert(['estado' => 'Divorciado/a']);
        DB::table('estado_civil')->insert(['estado' => 'Viudo/a']);
    }
}