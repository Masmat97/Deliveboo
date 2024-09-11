<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index()
    {
        $restaurant = Auth::user()->restaurant;
        $orders = $restaurant->orders()
                             ->with(['dishes'])
                             ->get();

        $totalSales = $orders->sum('total_amount');
        $totalOrders = $orders->count();

        // Aggregazione delle vendite mensili e annue
        $monthlySales = $orders->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m');
        })->map->sum('total_amount');

        $yearlySales = $orders->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y');
        })->map->sum('total_amount');

        return view('statistics.index', compact('totalSales', 'totalOrders', 'monthlySales', 'yearlySales'));
    }
}
