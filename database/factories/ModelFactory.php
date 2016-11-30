<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Flyer::class, function (Faker\Generator $faker) {
    return [
        'user_id'       => factory(App\User::class)->make()->id,
        'street' 		=> $faker->streetAddress,
        'city' 	 		=> $faker->city,
        'zip'   		=> $faker->postcode,
        'country'   	=> $faker->country,
        'price'   		=> $faker->numberBetween(60000, 100000),
        'description'   => $faker->paragraphs(3)
    ];
});
