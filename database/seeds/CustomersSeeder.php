<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        $faker = Factory::create('Ru_Ru');

        for ($i = 0; $i < 10; $i++) {
            Customer::create([
                'name' => $faker->name,
                'position' => 'customer',
                'employment_date' => $faker->date('Y-m-d','now'),
                'salary' => random_int(100000, 200000),
            ]);
        }
    }
}
