<?php

use Illuminate\Database\Seeder;

class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Blood::class)->create();
        DB::table('bloods')->insert([
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

        ]);
    }
}
