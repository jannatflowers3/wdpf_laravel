<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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

                $table->string('name');
                $table->string('email');
                $table->string('address');
                $table->string('phone')->nullable();
                $table->string('product_title');
                $table->integer('user_id')->nullable();
                $table->integer('price');
                $table->string('quantity');
                $table->string('image');
                $table->string('product_id')->nullable();
                $table->string('payment_status')->nullable();
                $table->string('delivery_status')->nullable();
            $table->timestamps();
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
