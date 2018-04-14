<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;
use Faker\Factory;

class ManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::truncate();

        $faker = Factory::create('Ru_Ru');

        for ($i = 0; $i < 10; $i++) {
            Manager::create([
                'senior_id' => $i+1,
                'name' => $faker->name,
                'position' => 'manager',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(50000, 70000),
            ]);
        }
    }
}
