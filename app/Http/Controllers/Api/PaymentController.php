<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();



        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}
