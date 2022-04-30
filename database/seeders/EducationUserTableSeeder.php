<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Educations;

class EducationUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Educations::factory(10)->create();
    }
}
