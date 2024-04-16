<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    public function run()
    {
        $productColors = [
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '2',
                'quantity' => 4,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '3',
                'quantity' => 3,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '4',
                'quantity' => 2,
            ],
            [//Iphone 13 Pro Max
                'product_id' => '1',
                'color_id' => '5',
                'quantity' => 1,
            ],
            
        ];

        foreach ($productColors as $key => $value) {
            ProductColor::create($value);
        }
    }
}
