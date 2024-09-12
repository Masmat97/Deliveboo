<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class StatisticsController extends Controller
{
    public function index()
    {
        $faker = Faker::create();

        $ordersDetails = collect()->times(10, function ($index) use ($faker) {
            return (object)[
                'created_at' => $faker->dateTimeBetween('2024-01-01', '2024-12-31'),
                'client_name' => $faker->name,
                'total' => $faker->numberBetween(100, 1000)
            ];
        });

        return view('admin.statistics.index', compact('ordersDetails'));
    }
}
