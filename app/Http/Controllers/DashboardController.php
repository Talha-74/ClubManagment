<?php

namespace App\Http\Controllers;
use App\Models\MenuItem;
use App\Models\dailyTotalOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // total number of orders
        $totalOrders = Order::count();

        // Number of orders received today
        $today = now()->toDateString();
        $DailyTotalOrder = new dailyTotalOrder();
        $ordersReceivedToday = $DailyTotalOrder->getDailyTotal($today);

        // Total breakfast orders
        $totalBreakfastOrders = Order::where('menu_type', 'Breakfast')->count();

        // Total Dinner Orders
        $totalDinnerOrders = Order::where('menu_type', 'Dinner')->count();

        // Total Order of breakfast received today
        $todayBreakfastOrders = Order::where('menu_type', 'Breakfast')
            ->whereDate('order_date', $today)
            ->count();

        $todayDinnerOrders = Order::where('menu_type', 'Dinner')
            ->whereDate('order_date', $today)
            ->count();

        // Fetch all orders with their associated menu items
$ordersWithMenuItems = Order::with('menuItem')->get(['*']);
// Calculate total earnings for all time
$totalEarnings = $ordersWithMenuItems->sum(function ($order) {
    return $order->menuItem->price; 
});

$today = now()->toDateString();
// Filter orders placed today
$ordersPlacedToday = $ordersWithMenuItems->filter(function ($order) use ($today) {
    return $order->order_date === $today;
});

// Calculate total earnings for today
$todaysEarnings = $ordersPlacedToday->sum(function ($order) {
    return $order->menuItem->price; 
});


        return view('dashboard', compact('totalOrders', 'ordersReceivedToday', 'totalBreakfastOrders', 'totalDinnerOrders', 'todayBreakfastOrders', 'todayDinnerOrders', 'totalEarnings', 'todaysEarnings'));
    }
}
