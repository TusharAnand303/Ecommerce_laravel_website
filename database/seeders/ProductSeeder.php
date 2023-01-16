<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table ('products')->insert([
            [
                'name' => 'Apple Iphone 12',
                'price' => 'Rs 54,990',
                'category' => 'Mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/31jQ91XUDhS.jpg',
                'description' => '
                The A14 chip in the iPhone 12 and 12 mini includes a faster and more powerful Image Signal Processor that enabled new camera functionality for 2020.',
            ],
            [
                'name' => 'Apple Watch Ultra',
                'price' => 'Rs 80,990',
                'category' => 'Mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/91z5KuonXrL._SX522_.jpg',
                'description' => '
                Apple Watch Ultra integrates both L1 and L5 GPS into a new antenna design for greater range with incredible power efficiency',
            ],
            [
                'name' => 'Apple Ipad',
                'price' => 'Rs 60,990',
                'category' => 'Mobile',
                'gallery' => 'https://www.apple.com/v/ipad-10.2/l/images/meta/ipad-10-2_overview__f0qk8pit7lea_og.png',
                'description' => '
                The iPad is a touchscreen tablet PC made by Apple . The original iPad debuted in 2010. Apple has three iPad product lines: iPad, iPad mini and iPad Pro.',
            ]
        ]);
    }
}
