<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'user_id' => '2',
                'tracking_no' => 'order-01234',
                'fullname' => 'Pham Hoang Minh',
                'email' => 'user@gmail.com',
                'phone' =>'0354868289',
                'pincode' => '700000',
                'address' =>'HCM',
                'status_message' => 'in progress',
                'payment_mode' =>'Cash On Delivery',
                'payment_id' =>''
            ],
            [
                'user_id' => '3',
                'tracking_no' => 'order-02314',
                'fullname' => 'Pham Hoang Minh 2',
                'email' => 'user2@gmail.com',
                'phone' =>'0354868289',
                'pincode' => '700000',
                'address' =>'HCM',
                'status_message' => 'in progress',
                'payment_mode' =>'Cash On Delivery',
                'payment_id' =>''
            ],
            [
                'user_id' => '4',
                'tracking_no' => 'order-03214',
                'fullname' => 'Pham Hoang Minh 3' ,
                'email' => 'user3@gmail.com',
                'phone' =>'0354868289',
                'pincode' => '700000',
                'address' =>'HCM',
                'status_message' => 'cancelled',
                'payment_mode' =>'Cash On Delivery',
                'payment_id' =>''
            ],
            [
                'user_id' => '2',
                'tracking_no' => 'order-04123',
                'fullname' => 'Pham Hoang Minh 4',
                'email' => 'user4@gmail.com',
                'phone' =>'0354868289',
                'pincode' => '700000',
                'address' =>'HCM',
                'status_message' => 'complete',
                'payment_mode' =>'Cash On Delivery',
                'payment_id' =>''
            ],
        ];

        foreach ($orders as $key => $value) {
            Order::create($value);
        }
    }
}
