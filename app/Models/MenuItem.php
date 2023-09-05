<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $table = 'menu_items';

    public function Orders()
    {
        return $this->hasMany(Order::class, 'menu_id');
    }


}
