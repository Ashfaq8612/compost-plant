<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MswRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('plant_operations')->insert([
                'date' => $faker->date(),
                'operation_time_hr' => $faker->randomNumber(),
                'waste_processing' => $faker->randomNumber(),
                'total_msw_recieved' => $faker->randomNumber(),
                'yesterday_left_over' => $faker->randomNumber(),
                'consume' => $faker->randomNumber(),
                'rejection' => $faker->randomNumber(),
                'balance' => $faker->randomNumber(),
                'bio' => $faker->randomNumber(),
                'rejection_mt' => $faker->randomNumber(),
                'scm_mt' => $faker->randomNumber(),
                'previous_scm' => $faker->randomNumber(),
                'scm_received' => $faker->randomNumber(),
                'scm_total' => $faker->randomNumber(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
