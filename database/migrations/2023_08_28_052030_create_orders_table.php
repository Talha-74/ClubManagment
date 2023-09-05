<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('menu_type')->nullable();
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone');
            $table->string('num_of_persons');
            $table->time('arriving_time');
            $table->time('leaving_time');
            $table->date('order_date');

$table->unsignedBigInteger('menu_id');
$table->foreign('menu_id')->references('id')->on('menu_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
