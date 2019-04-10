<?php

use Faker\Generator as Faker;
use Freshwork\ChileanBundle\Rut;

$factory->define(App\Paciente::class, function (Faker $faker) {
	$random_number = rand(1000000, 25000000);
	$rut = new Rut($random_number);
    return [
        'Nombre' => $faker->name(),
        'Rut' => $rut->fix()->format(Rut::FORMAT_WITH_DASH),
        'FechaNacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'Direccion' => $faker->streetAddress(),
        'Comuna' => $faker->word(),
        'TelefonoFijo' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'celular' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'EstadoCivil' => $faker->randomElement($array = array ('Soltero/a','Casado/a','Conviviente Civil','Divorciado/a','Viudo/a')),
        'CentroAtencionUrgencia' => $faker->word(),
        'MedicoTratante' => $faker->name(),
        'InicioCuidados' => now(),
        'Activo' => 1,
    ];
});