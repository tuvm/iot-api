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
        'gender_id' => 2,
        'brand_id' => 2,
        'badge_id' => 2,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
