<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Unknown',
            'email' => 'Unknown',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@wuatshop.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
