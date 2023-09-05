<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dailyTotalOrder extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'total_orders'];

        // Define the getDailyTotal method
        public function getDailyTotal($date)
    {
        $dailyTotalOrder = $this->where('date', $date)->first();

        // If there's no record for the given date, return 0
        if (!$dailyTotalOrder) {
            return 0;
        }

        return $dailyTotalOrder->total_orders;
    }

    public function incrementDailyTotal($date)
    {
        $dailyTotalOrder = $this->where('date', $date)->first();

        // If there's no record for the given date, create a new one
        if (!$dailyTotalOrder) {
            $dailyTotalOrder = new DailyTotalOrder([
                'date' => $date,
                'total_orders' => 1,
            ]);
        } else {
            $dailyTotalOrder->total_orders++;
        }

        $dailyTotalOrder->save();
    }
    
    }


