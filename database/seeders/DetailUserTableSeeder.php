<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DetailUser::factory(5)->create();

        // $detail_user = [
        //     [
        //         'users_id' => 1,
        //         'photo' => '',
        //         'created_at' => date('Y-m-d h:i:s'),
        //         'updated_at' => date('Y-m-d h:i:s'),
        //     ],
        //     [
        //         'users_id' => 2,
        //         'photo' => '',
        //         'created_at' => date('Y-m-d h:i:s'),
        //         'updated_at' => date('Y-m-d h:i:s'),
        //     ],
        // ];

        // DetailUser::insert($detail_user);
    }
}
