<?php

namespace Database\Seeders;

use App\Models\ProductReference;
use App\Models\Reference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reference::create(['name' => 'Modulo IPhone 14 Pro', 'brand' => 'Apple']);
        Reference::create(['name' => 'Modulo IPhone 13 Pro', 'brand' => 'Apple']);
        Reference::create(['name' => 'Modulo Note 10 pro', 'brand' => 'Xiaomi']);
        Reference::create(['name' => 'Modulo Note 11 pro', 'brand' => 'Xiaomi']);
        Reference::create(['name' => 'Modulo Note 12 pro', 'brand' => 'Xiaomi']);
        Reference::create(['name' => 'Modulo Poco x4 pro', 'brand' => 'Xiaomi']);
        Reference::create(['name' => 'Modulo Poco x5 pro', 'brand' => 'Xiaomi']);
        ProductReference::create(['product_id' => 1, 'reference_id' => 1]);
        ProductReference::create(['product_id' => 1, 'reference_id' => 2]);
        ProductReference::create(['product_id' => 3, 'reference_id' => 2]);
        ProductReference::create(['product_id' => 7, 'reference_id' => 3]);
        ProductReference::create(['product_id' => 7, 'reference_id' => 4]);
        ProductReference::create(['product_id' => 7, 'reference_id' => 5]);
        ProductReference::create(['product_id' => 7, 'reference_id' => 6]);
    }
}
