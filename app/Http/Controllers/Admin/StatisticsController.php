<?php

// app/Http/Controllers/Admin/StatisticsController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function index()
    {
        // Calcolare le statistiche annuali
        $yearlyStats = Order::select(
            DB::raw('year(created_at) as year'),
            DB::raw('count(*) as orders_count'),
            DB::raw('sum(total) as total_sales')
        )
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get()
            ->keyBy('year');

        return view('admin.statistics.index', compact('yearlyStats'));
    }
}
