<?php

namespace Database\Seeders;

use App\Models\Product;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = collect([
            [
                'name' => 'iPhone 13 Pro c/ aro',
                'slug' => 'iphone-14-pro',
                'code' => 001,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 2,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Flex Camera iPhone 14',
                'slug' => 'iphone-14-pro',
                'code' => 012,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 2,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'iPhone 13 pro s/ aro',
                'slug' => 'asus-laptop',
                'code' => 002,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 1,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'flex A30',
                'slug' => 'logitech-keyboard',
                'code' => 003,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 2,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Flex S21',
                'slug' => 'logitech-speakers',
                'code' => 004,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 4,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Modulo S21',
                'slug' => 'autocad-v7.0',
                'code' => 005,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 5,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ],
            [
                'name' => 'Tela Note 10 / Note 11 pro Poco x5 pro',
                'slug' => 'autocad-v7.0',
                'code' => 005,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'notes' => null,
                'category_id' => 7,
                'unit_id' => 3,
                "user_id"=>1,
                "uuid"=>Str::uuid()
            ]
        ]);

        $products->each(function ($product){
            Product::create($product);
        });
    }
}
