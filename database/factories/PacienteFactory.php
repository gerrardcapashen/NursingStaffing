<?php

use Faker\Generator as Faker;
use Freshwork\ChileanBundle\Rut;

$factory->define(App\Paciente::class, function (Faker $faker) {
	$random_number = rand(1000000, 25000000);
	$rut = new Rut($random_number);
    return [
        'nombre' => $faker->name(),
        'rut' => $rut->fix()->format(Rut::FORMAT_WITH_DASH),
        'fechaNacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'direccion' => $faker->streetAddress(),
        'comuna' => $faker->word(),
        'telefonoFijo' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'celular' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'estadoCivil' => $faker->randomElement($array = array ('Soltero/a','Casado/a','Conviviente Civil','Divorciado/a','Viudo/a')),
        'centroAtencionUrgencia' => $faker->word(),
        'medicoTratante' => $faker->name(),
        'inicioCuidados' => now(),
        'activo' => 1,
    ];
});