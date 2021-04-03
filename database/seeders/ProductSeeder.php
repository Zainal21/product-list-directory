<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'product_name' => 'Baju keren 1',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, adipisci.',
            'image' => 'uploads/1.png',
            'category_id'  => Category::firstOrCreate(['category_name' => 'Fashion'])->id
        ]);

        \DB::table('products')->insert([
            'product_name' => 'Baju Keren 2',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, adipisci.',
            'image' => 'uploads/2.png',
            'category_id'  => Category::firstOrCreate(['category_name' => 'Fashion'])->id
        ]);
    }
}
