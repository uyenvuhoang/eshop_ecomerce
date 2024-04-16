<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'id' =>'1',
                'name' => 'Mobile',
                'slug' => 'mobile',
                'description' => 'This is desc mobile category',
                'image' => 'https://cdn2.iconfinder.com/data/icons/devicecons/32/da-icons-perfume_copy_2-512.png',
                'meta_title' => 'mobile',
                'meta_keyword' => 'mobile',
                'meta_description' => 'mobile',
            ], 
            [
                'id' =>'2',
                'name' => 'Laptop',
                'slug' => 'laptop',
                'description' => 'This is desc laptop category',
                'image' => 'http://icons.iconarchive.com/icons/iconsmind/outline/512/Laptop-3-icon.png',
                'meta_title' => 'mobile',
                'meta_keyword' => 'mobile',
                'meta_description' => 'mobile',
            ],
            [
                'id' =>'3',
                'name' => 'Tablet',
                'slug' => 'tablet',
                'description' => 'This is desc tablet category',
                'image' => 'https://cdn0.iconfinder.com/data/icons/simplicity/512/tablet-512.png',
                'meta_title' => 'tablet',
                'meta_keyword' => 'tablet',
                'meta_description' => 'tablet',
            ],
            [
                'id' =>'4',
                'name' => 'Smart Watch',
                'slug' => 'smart-watch',
                'description' => 'This is desc Smart Watch category',
                'image' => 'https://cdn1.iconfinder.com/data/icons/device-5/500/watch-512.png',
                'meta_title' => 'tablet',
                'meta_keyword' => 'tablet',
                'meta_description' => 'tablet',
            ],
            
        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
