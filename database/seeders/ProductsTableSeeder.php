<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'ชาเขียว',
            'cost' => 5000,
            'price' => 50 ,
            'qty' => 20,
            'image_path' => '',
            'image_url' => 'https://th.bing.com/th/id/OIP.T25xJ9no0udJGsk4z5ri5gHaHa?rs=1&pid=ImgDetMain',
            'product_type_id' => 2],

            ['name' => 'โกโก้',
            'cost' => 10000,
            'price' => 60 ,
            'qty' => 50,
            'image_path' => '',
            'image_url' => 'https://yalamarketplace.com/upload/1624449872880.jpg',
            'product_type_id' => 2],
            ];
            DB::table('products')->insert($data);
    }
}