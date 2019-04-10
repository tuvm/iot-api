<?php

use Carbon\Carbon;

$factory->define(App\Models\ProductImage::class, function () {
    $faker = \Faker\Factory::create();
    \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

    return [
        'normal' => $faker->placeholder('250x300'),
        'thumbnail' => $faker->placeholder('50x60'),
        'large' => $faker->placeholder('900x1024'),
        'product_id' => $faker->numberBetween(1, 20),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
