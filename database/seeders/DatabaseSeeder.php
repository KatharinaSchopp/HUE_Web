<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VaclocationsTableSeeder::class);
        $this->call(VaccinationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}