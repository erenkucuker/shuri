<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('order_id');
            $table->string('shipping_method');
            $table->string('shipping_cost');
            $table->string('shipping_tax');
            $table->string('shipping_total');
            $table->string('shipping_status');
            $table->string('shipping_tracking_number');
            $table->string('shipping_tracking_url');
            $table->string('shipping_tracking_description');            
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');
    }
}
