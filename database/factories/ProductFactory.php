<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'desc' => "A for apple",
        'price' => 99.79,
        'qty' => 100, // password
        'type' => 1,
        'img'=>'1593195930.jpeg',
        'created_at'=>'2020-06-27 11:45:26'
    ];
});