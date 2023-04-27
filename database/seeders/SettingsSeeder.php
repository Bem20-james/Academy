<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        DB::table('settings')->insert(array (
            0 =>
            array (
                'admin' => 1,
                'admin_role' => 1,
                'name' => 'academia',
                'logo' => 'assets/images/logo-academia.png',
                'post_code' => "00000",
                'country' => 1,
                'country_code' => 'NG',
                'welc_msg' => 'you are welcome to our school',
                'email' => 'academia@gmail.com',
                'facebook_link' => 'facebook_link',
                'whatsapp_link' => 'whatsapp',
                'instagram_link' => 'instagram_link',
                'twitter_link' => 'twitter_link',
                'address_one' => 'address 1',
                'address_two' => 'address 2',
                'address_three' => 'address 3',
                'contact' => 'xxxxxxxxxx',
                'about_us' => 'about_us',
            ),
        ));
    }
}


