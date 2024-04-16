<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $sliders = [
            [
                'title' => '',
                'description' => '',
                'image' => 'https://theme.hstatic.net/1000026716/1000440777/14/slideshow_3.jpg?v=32719',
            ], 
            [
                'title' => '',
                'description' => '',
                'image' => 'https://theme.hstatic.net/1000026716/1000440777/14/slideshow_9.jpg?v=32719',
            ], 
            [
                'title' => '',
                'description' => '',
                'image' => 'https://theme.hstatic.net/1000026716/1000440777/14/slideshow_10.jpg?v=32719',
            ],  
             
        ];

        foreach ($sliders as $key => $value) {
            Slider::create($value);
        }
    }
}
