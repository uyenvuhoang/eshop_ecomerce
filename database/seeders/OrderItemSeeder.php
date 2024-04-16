<?php

namespace Database\Seeders;

use App\Models\Orderitem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        $orderItems = [
            [
                'order_id' => 1,
                'product_id' => 1,
                'product_color_id' => null,
                'quantity' => 1,
                'price' => 1452,
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'product_color_id' => null,
                'quantity' => 1,
                'price' => 1260,
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'product_color_id' => null,
                'quantity' => 1,
                'price' => 1590,
            ],
            [
                'order_id' => 4,
                'product_id' => 4,
                'product_color_id' => null,
                'quantity' => 1,
                'price' => 1300,
            ],
        ];

        foreach ($orderItems as $key => $value) {
            Orderitem::create($value);
        }
    }
}
