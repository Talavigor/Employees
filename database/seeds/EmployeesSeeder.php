<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        $faker = Factory::create('Ru_Ru');

        for ($i = 0; $i < 5; $i++) {
            Employee::create([
                'name' => $faker->name,
                'position' => 'junior',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(15000, 25000),
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Employee::create([
                'name' => $faker->name,
                'position' => 'middle',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(30000, 40000),
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Employee::create([
                'name' => $faker->name,
                'position' => 'senior',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(45000, 70000),
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Employee::create([
                'name' => $faker->name,
                'position' => 'manager',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(50000, 70000),
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            Employee::create([
                'name' => $faker->name,
                'position' => 'customer',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(100000, 200000),
            ]);
        }
    }
}
