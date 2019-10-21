<?php

use Carbon\Carbon;

$factory->define(App\Models\Location::class, function () {
    $faker = \Faker\Factory::create();
    \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

    return [
        'area' => $faker->streetName,
        'mac' => $faker->macAddress,
        'parent_id' => $faker->numberBetween(1, 5),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
