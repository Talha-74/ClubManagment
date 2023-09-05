<?php

namespace App\Http\Controllers;
use App\Http\Controllers\OrderController;
use App\Models\dailyTotalOrder;
use Illuminate\Http\Request;

class DailyTotalOrders extends Controller
{
    public function getDailyTotal($date) {
    $dailyTotalOrder = new dailyTotalOrder();
    $totalOrders = $dailyTotalOrder->getDailyTotal($date);
    return response()->json(['total_orders' =>$totalOrders]);
    }
    public function incrementDailyTotal($date) {

        $dailyTotalOrder =new dailyTotalOrder();
        $dailyTotalOrder->incrementDailyTotal($date);
return response()->json(['message' => 'Daily total orders incremented successfully']);
        
        }
    }



