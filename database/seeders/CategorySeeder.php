<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "id" => 1,
                "name" => 'املاک',
                "slug" => 'states',
                "category_id" => 0,
            ], [
                "id" => 2,
                "name" => 'وسایل نقلیه',
                "slug" => 'cars',
                "category_id" => 0,
            ], [
                "id" => 3,
                "name" => 'کالاهای دیجیتال',
                "slug" => 'digital goods',
                "category_id" => 0,
            ],[],[],
            ]);
    }
}
