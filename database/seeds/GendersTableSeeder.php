<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'name' => 'Unknown'
        ]);
        DB::table('genders')->insert([
            'name' => 'Men'
        ]);
        DB::table('genders')->insert([
            'name' => 'Women'
        ]);
        DB::table('genders')->insert([
            'name' => 'Kid'
        ]);
    }
}
