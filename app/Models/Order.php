<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_name',
        'email',
        'phone',
        'num_of_persons',
        'arriving_time',
        'leaving_time',
        'order_date',
        'menu_id',
        'menu_type'
    ];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class, 'menu_id'); 
    }
}
