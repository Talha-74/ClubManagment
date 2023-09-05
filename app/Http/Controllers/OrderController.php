<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DailyTotalOrders;
use App\Models\dailyTotalOrder;
use App\Models\MenuItem;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\AddMenu;


class OrderController extends Controller
{
    public function create()
    {
        $menuItems = MenuItem::all();
        $orderNumber = $this->generateRandomOrderNumber();
        $menuTypes=AddMenu::all();
        return view('order-form', compact('menuItems', 'orderNumber', 'menuTypes'));
    }

    private function generateRandomOrderNumber()
    {
        $letters = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // Generates 3 random uppercase letters
        $digits = rand(100, 999); // Generates 3 random digits
        return $letters . $digits;
    }

    // store the order data in table
    
    public function store(Request $request, dailyTotalOrder $dailyTotalOrdersController)
    {
        // Validate the incoming data
        $data = $request->validate([
            'customer_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'num_of_persons' => 'required|integer',
            'arriving_time' => 'required',
            'leaving_time' => 'required',
            'menu_item' => 'required',
        ]);

        $date = now()->toDateString();

        // Check if the daily order limit has been reached
    $dailyTotal = $dailyTotalOrdersController->getDailyTotal($date);

    if ($dailyTotal >= 5) {
        return redirect()->back()->with('error', "We have reached today's order limit and are not taking further orders. Thank you for your understanding.");
    }    


        $orderNumber = $this->generateRandomOrderNumber();   // Generate a rondom Order number

        $menuType = $request->input('menu_type');

        // Create and save the order
        $order = new Order([
            'order_number' => $orderNumber,
            'customer_name' => $data['customer_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'num_of_persons' => $data['num_of_persons'],
            'arriving_time' => $data['arriving_time'],
            'leaving_time' => $data['leaving_time'],
            'order_date' => $date,
            'menu_id' => $data['menu_item'],
            'menu_type' => $menuType,
        ]);

        $order->save();

        $dailyTotalOrdersController->incrementDailyTotal($date);

        return view('store_success');
        
    }
}
