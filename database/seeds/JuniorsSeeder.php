<?php

use Illuminate\Database\Seeder;
use App\Models\Junior;
use Faker\Factory;

class JuniorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Junior::truncate();

        $faker = Factory::create('Ru_Ru');

        for ($i = 0; $i < 10; $i++) {
            Junior::create([
                'name' => $faker->name,
                'position' => 'junior',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(15000, 25000),
            ]);
        }
    }
}
