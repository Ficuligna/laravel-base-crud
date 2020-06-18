<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dinosaurino;
use Faker\Generator as Faker;

$factory->define(Dinosaurino::class, function (Faker $faker) {
    return [
      "first_name" => $faker -> firstName(),
      "last_name" => $faker -> lastName(),
      "address" => $faker -> address(),
      "code" => $faker -> ean13(),
      "state" => $faker -> word(),
      "phone_number" => $faker -> phoneNumber(),
      "role" => $faker -> word(),
      "morto_per_colpa_di_Albano" => function(){
        $ti_ha_ucciso_Albano= rand(0,1);
        return $ti_ha_ucciso_Albano ?  "si purtroppo si" : "no è ancora vivo";
        }
    ];
});
