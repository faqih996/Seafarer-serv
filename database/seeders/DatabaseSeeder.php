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
        $this->call([
            ApplyStatusSeeder::class,
            UsersTableSeeder::class,
            DetailUserTableSeeder::class,
            EducationUserTableSeeder::class,
        ]);
    }
}
