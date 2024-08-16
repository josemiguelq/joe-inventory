<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'id'    => 1,
                'name'  => 'Display',
                'slug'  => 'laptops',
                "user_id" => 1,
            ],
            [
                'id'    => 2,
                'name'  => 'Flex Carga+Home+Volume',
                'slug'  => 'hardware',
                "user_id" => 1,

            ],
            [
                'id'    => 3,
                'name'  => 'Smartphones',
                'slug'  => 'smartphones',
                "user_id" => 1,

            ],
            [
                'id'    => 4,
                'name'  => 'Modulo c Aro',
                'slug'  => 'speakers',
                "user_id" => 1,

            ],
            [
                'id'    => 5,
                'name'  => 'Modulo s Aro',
                'slug'  => 'software',
                "user_id" => 1,

            ],
            [
                'id'    => 6,
                'name'  => 'Bat BL45',
                'slug'  => 'bateria',
                "user_id" => 1,

            ],
            [
                'id'    => 7,
                'name'  => 'Tela',
                'slug'  => 'tela',
                "user_id" => 1,

            ]
        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
