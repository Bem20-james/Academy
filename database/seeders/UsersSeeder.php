<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
            array(
                'firstname' => 'Academia',
                'lastname' => 'Academic',
                'profile_img' => 'assets/images/jacob.jpg',
                'role' => 1,
                'email' => 'academia@gmail.com',
                'password' => bcrypt(123456),
            )
        ));
    }
}
