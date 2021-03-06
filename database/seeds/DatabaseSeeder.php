<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'pacientes',
            'estado_civil',
            'comunas'
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(ComunaSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        //DB::table('pacientes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
