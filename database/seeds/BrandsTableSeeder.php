<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Unknown'
        ]);
        DB::table('brands')->insert([
            'name' => 'Adidas'
        ]);
        DB::table('brands')->insert([
            'name' => 'Nike'
        ]);
    }
}
