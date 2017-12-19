<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(JuniorsSeeder::class);
        $this->call(MiddlesSeeder::class);
        $this->call(SeniorsSeeder::class);
        $this->call(ManagersSeeder::class);
        $this->call(CustomersSeeder::class);
    }
}
