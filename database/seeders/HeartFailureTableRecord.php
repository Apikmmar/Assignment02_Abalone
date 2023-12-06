<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class HeartFailureTableRecord extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        $fakerecord = Faker::create();
        foreach (range(1, 100) as $record) {
            DB::table('heart_failure_records')->insert([
                'age' => $fakerecord->numberBetween(35, 100),
                'anaemia' => $fakerecord->randomElement(['Yes', 'No']),
                'creatinine_phosphokinase' => $fakerecord->numberBetween(1, 1000),
                'diabetes' => $fakerecord->randomElement(['Yes', 'No']),
                'ejection_fraction' => $fakerecord->numberBetween(1, 100),
                'high_blood_pressure' => $fakerecord->randomElement(['Yes', 'No']),
                'platelets' => $fakerecord->randomFloat(2, 100000, 900000),
                'serum_creatinine' => $fakerecord->randomFloat(2, 0.5, 10),
                'serum_sodium' => $fakerecord->numberBetween(110, 150),
                'sex' => $fakerecord->randomElement(['Man', 'Women']),
                'smoking' => $fakerecord->randomElement(['Yes', 'No']),
                'time' => $fakerecord->numberBetween(1, 365),
                'death_event' => $fakerecord->randomElement(['Yes', 'No']),
            ]);
        }
    }
}