<?php

use Illuminate\Database\Seeder;
use App\Models\Senior;
use Faker\Factory;

class SeniorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Senior::truncate();

        $faker = Factory::create('Ru_Ru');

        for ($i = 0; $i < 10; $i++) {
            Senior::create([
                'name' => $faker->name,
                'position' => 'senior',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(45000, 70000),
            ]);
        }
    }
}
