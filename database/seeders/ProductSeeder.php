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
                'name'=>'Oppo Mobile',
                'price'=>'15300',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1562254492-377a3ac576f4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
                'description'=>'a smartphone with 6gb ram and much more feature'
            ],
            [
                'name'=>'Samsung TV',
                'price'=>'28200',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1579894059380-1866b68bce6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
                'description'=>'a smart tv with much more feature'
            ],
            [
                'name'=>'LG TV',
                'price'=>'15000',
                'category'=>'tv',
                'gallery'=>'https://images.unsplash.com/photo-1590373717962-014ba271c061?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
                'description'=>'a smart tv with much more feature'
            ],
            [
                'name'=>'panasonic fridge',
                'price'=>'20000',
                'category'=>'fridge',
                'gallery'=>'https://images.unsplash.com/photo-1588854337115-1c67d9247e4d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80',
                'description'=>'a fridge with much more feature'
            ]
        ]
        );
    }
}
