<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
        [
                'name'=>'Redmi Mobile',
                'price'=>'15,999',
                'category'=>'mobile',
                'description'=>'A mobile with androidOS, 4GB RAM, 64GB internal memeory, 12MP camera and much more feature',
                'gallery'=>'img/redmi_note5pro.png',
        ],[
                'name'=>'Samsung Mobile',
                'price'=>'20,999',
                'category'=>'mobile',
                'description'=>'A mobile with androidOS, 6GB RAM, 64GB internal memeory, 16MP camera and much more feature',
                'gallery'=>'img/samsumg_phone.jpg',
        ],
        // [
        //     'name'=>'Smart TV',
        //     'price'=>'25,999',
        //     'category'=>'tv',
        //     'description'=>'A tv with android tv, 1GB RAM, 16GB internal memeory and much more feature',
        //     'gallery'=>'img/smarttv.jpg',
        // ],[
        //     'name'=>'4K TV',
        //     'price'=>'30,999',
        //     'category'=>'tv',
        //     'description'=>'A tv with 4K display, amazing colors and much more feature',
        //     'gallery'=>'img/4ktv.jpg',
        // ],[
        //     'name'=>'MacBooks',
        //     'price'=>'99,999',
        //     'category'=>'laptop',
        //     'description'=>'A laptop with MacOS, apple M1 processor, 8GB RAM, 256GB internal memeory and much more feature',
        //     'gallery'=>'img/macbook.jpg',
        // ],[
        //     'name'=>'SurfaceBook',
        //     'price'=>'79,999',
        //     'category'=>'laptop',
        //     'description'=>'A laptop with Windows 10, intel i7 processor, 8GB RAM, 256GB internal memeory and much more feature',
        //     'gallery'=>'img/surfacebook.jpg',
        // ],
        ]);
    }
}
