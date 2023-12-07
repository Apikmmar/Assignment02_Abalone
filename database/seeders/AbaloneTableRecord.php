<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AbaloneTableRecord extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 100 fake abalone data
        $faker = Faker::create();
        foreach (range(1, 100) as $fakeabalone) {
            DB::table('abalones')->insert([
                'sex' => $faker->randomElement(['M', 'F', 'I']),
                'length' => $faker->randomFloat(3 ,0 , 1),
                'diameter' => $faker->randomFloat(3, 0, 1),
                'height' => $faker->randomFloat(3, 0, 1.5),
                'whole_weight' => $faker->randomFloat(4, 0, 3),
                'shucked_weight' => $faker->randomFloat(4, 0, 2),
                'viscera_weight' => $faker->randomFloat(4, 0, 1),
                'shell_weight' => $faker->randomFloat(4, 0, 1.5),
                'rings' => $faker->numberBetween(1, 40)
            ]);
        }
    }
}