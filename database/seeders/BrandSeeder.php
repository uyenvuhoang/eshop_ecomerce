<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            // mobile Brand
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'status' => '0',
                'category_id' =>'1'
            ], 
            [
                'name' => 'Sam Sung',
                'slug' => 'sam-sung',
                'status' => '0',
                'category_id' =>'1'
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'status' => '0',
                'category_id' =>'1'
            ], 
            [
                'name' => 'Oppo',
                'slug' => 'oppo',
                'status' => '0',
                'category_id' =>'1'
            ],
            //laptop Brand
            [
                'name' => 'Dell',
                'slug' => 'dell',
                'status' => '0',
                'category_id' =>'2'
            ], 
            [
                'name' => 'Asus',
                'slug' => 'asus',
                'status' => '0',
                'category_id' =>'2'
            ],
            [
                'name' => 'Macbook',
                'slug' => 'macbook',
                'status' => '0',
                'category_id' =>'2'
            ], 
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'status' => '0',
                'category_id' =>'2'
            ], 
            //tablet brand
            [
                'name' => 'iPad',
                'slug' => 'ipad',
                'status' => '0',
                'category_id' => '3'
            ],
            [
                'name' => 'SamSung',
                'slug' => 'samsung',
                'status' => '0',
                'category_id' => '3'
            ],
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'status' => '0',
                'category_id' => '3'
            ],
            [
                'name' => 'Masstel',
                'slug' => 'masstel',
                'status' => '0',
                'category_id' => '3'
            ],
            //smartwatch brand
            [
                'name' => 'WATCH',
                'slug' => 'watch',
                'status' => '0',
                'category_id' => '4'
            ],
            [
                'name' => 'SamSung',
                'slug' => 'samsung',
                'status' => '0',
                'category_id' => '4'
            ],
            [
                'name' => 'Amazfit',
                'slug' => 'amazfit',
                'status' => '0',
                'category_id' => '4'
            ],
            [
                'name' => 'Garmin',
                'slug' => 'garmin',
                'status' => '0',
                'category_id' => '4'
            ],
        ];

        foreach ($brands as $key => $value) {
            Brand::create($value);
        }
    }
}
