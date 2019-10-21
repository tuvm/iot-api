<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('locations')->insert([
            'area' => $faker->streetAddress,
            'mac' => $faker->macAddress,
            'parent_id' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('locations')->insert([
            'area' => $faker->streetAddress,
            'mac' => $faker->macAddress,
            'parent_id' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('locations')->insert([
            'area' => $faker->streetAddress,
            'mac' => $faker->macAddress,
            'parent_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('locations')->insert([
            'area' => $faker->streetAddress,
            'mac' => $faker->macAddress,
            'parent_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('locations')->insert([
            'area' => $faker->streetAddress,
            'mac' => $faker->macAddress,
            'parent_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        factory(App\Models\Location::class, 20)->create();
    }
}
