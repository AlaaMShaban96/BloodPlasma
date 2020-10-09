<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blood;
use Faker\Generator as Faker;
$factory->define(Blood::class, function (Faker $faker) {
    return [
            [
                'name'=>"A+"
            ],
            [
                'name'=>"A-"
            ],
            [
                'name'=>"B+"
            ],
            [
                'name'=>"B-"
            ],
            [
                'name'=>"O+"
            ],
            [
                'name'=>"O-"
            ],
            [
                'name'=>"AB+"
            ],
            [
                'name'=>"AB-"
            ]

    ];
});
