<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            [
                'name' => 'red',
                'code' => '#CB2E39',
                'status' => 0,
            ],
            [
                'name' => 'grey',
                'code' => '#4B4B4D',
                'status' => 0,
            ],
            [
                'name' => 'yellow',
                'code' => '#FEEB91',
                'status' => 0,
            ],
            [
                'name' => 'green',
                'code' => '#B1DFC5',
                'status' => 0,
            ], 
            [
                'name' => 'violet',
                'code' => '#D5D1E0',
                'status' => 0,
            ], 
            [
                'name' => 'blue',
                'code' => '#0000FF',
                'status' => 0,
            ], 
        ];

        foreach ($colors as $key => $value) {
            Color::create($value);
        }
    }
}
