<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Unknown'
        ]);
        DB::table('products')->insert([
            'name' => 'Adidas Ultraboot',
            'price' => 1000000,
            'promote_price' => 800000,
            'gender_id' => 2,
            'brand_id' => 2,
            'badge_id' => 3
        ]);
    }
}
