<?php

use Carbon\Carbon;

$factory->define(App\Models\Product::class, function () {
    $faker = \Faker\Factory::create();
    \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

    return [
        'name' => $faker->productName,
        'price' => 1000000,
        'promote_price' => 800000,
        'image' => $faker->placeholder('250x300'),
        'gender_id' => $faker->numberBetween(1, 3),
        'brand_id' => $faker->numberBetween(1, 3),
        'badge_id' => $faker->numberBetween(1, 3),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
