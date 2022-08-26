<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
  
        $sliders = [
            [
               'title'=>'Make Things Possible',
               'description'=>'One Stop Solution for Telco and Tower companies',
               'image'=>'assets/slider/1738683520684020.jpg',
               'status'=> '1',
            ],
            [
                'title'=>'Make Things Possible',
                'description'=>'End to End Solutions in Engineering Services',
                'image'=>'assets/slider/1738683561658867.jpg',
                'status'=> '1',
             ],
             [
                'title'=>'Secure, smart, and easy to use email',
                'description'=>'Get more done with Gmail. Now integrated with Google Chat, Google Meet, and more, all in one place',
                'image'=>'assets/slider/1738677602509015.jpg',
                'status'=> '1',
             ],
             [
                'title'=>'Make Things Possible',
                'description'=>'Partnering in Infrastructure development across Myanmar',
                'image'=>'assets/slider/1738683610556542.jpg',
                'status'=> '1',
             ],
             [
                'title'=>'Make Things Possible',
                'description'=>'Innovative and Smart Solutions for everyone',
                'image'=>'assets/slider/1738683657332911.jpg',
                'status'=> '1',
             ],
             [
                'title'=>'Make Things Possible',
                'description'=>'Helping your business to grow fast',
                'image'=>'assets/slider/1738683689329038.jpg',
                'status'=> '1',
             ],
             [
                'title'=>'Make Things Possible',
                'description'=>'Turn key infrastructure and power projects',
                'image'=>'assets/slider/1738683715599004.jpg',
                'status'=> '1',
             ],
         
        ];
        foreach ( $sliders as $key => $slider) {
            Slider::create($slider);
        }

    }
}
