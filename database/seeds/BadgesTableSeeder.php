<?php

use Illuminate\Database\Seeder;

class BadgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('badges')->insert([
            'name' => 'Default'
        ]);
        DB::table('badges')->insert([
            'name' => 'Hot',
            'color' => 'red'
        ]);
        DB::table('badges')->insert([
            'name' => 'Sale',
            'color' => 'green'
        ]);
        DB::table('badges')->insert([
            'name' => 'Sold out',
            'color' => 'yellow'
        ]);
    }
}
