<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [

                "id" => 1,
                "name" => 'ali',
                "mobile" => +989155551241,
                "email" => 'ali@gmail.com',
                "password" => '123456789',
                "role" => '1',
                "profile" => '',
            ], [
                "id" => 2,
                "name" => 'ali1',
                "mobile" => +989155551241,
                "email" => 'ali1@gmail.com',
                "password" => '123456789',
                "role" => '1',
                "profile" => '',
            ], [
                "id" => 3,
                "name" => 'ali2',
                "mobile" => +989155551241,
                "email" => 'ali2@gmail.com',
                "password" => '123456789',
                "role" => '1',
                "profile" => '',
            ], [], [],
        ]);
    }
}
