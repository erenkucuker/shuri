<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('status');
            $table->integer('tax');
            $table->integer('amount');
            $table->integer('total');
            $table->unsignedBigInteger('cart_id');            
            $table->unsignedBigInteger('discount_id');            
            $table->unsignedBigInteger('shipping_id')->nullable();            
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
