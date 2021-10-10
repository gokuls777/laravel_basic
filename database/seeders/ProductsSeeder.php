<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => Str::random(10),
            'category' => Str::random(10),
            'amount' => 123
        ]);
    }

    
}
