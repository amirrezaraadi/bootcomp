<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
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
                "title" => 'املاک',
                "slug" => 'states',
                "banner" => 'sdfgewrtgf',
                "content" => 'asaa',
                "user_id" => '1',

            ], [
                "id" => 2,
                "title" => 'املاک',
                "slug" => 'states',
                "banner" => 'asfdsf',
                "content" => 'asaa',
                "user_id" => '2',
            ], [
                "id" => 3,
                "title" => 'املاک',
                "slug" => 'states',
                "banner" => 'safdsftg',
                "content" => 'asaa',
                "user_id" => '3',
            ], [], [],
        ]);
    }
}
