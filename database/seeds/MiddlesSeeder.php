<?php

use Illuminate\Database\Seeder;
use App\Models\Middle;
use Faker\Factory;

class MiddlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Middle::truncate();

        $faker = Factory::create('Ru_Ru');

        for ($i = 0; $i < 10; $i++) {
            Middle::create([
                'junior_id' => $i+1,
                'name' => $faker->name,
                'position' => 'middle',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(30000, 40000),
            ]);
        }
    }
}
