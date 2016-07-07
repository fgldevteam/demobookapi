<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unsigned();
            $table->string('order_id');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->date('date_out');
            $table->date('due_on');
            $table->date('date_in');
            $table->foreign('user_id')->on('id')->references('users')->onDelete('cascade');
            $table->foreign('product_id')->on('id')->references('products')->onDelete('cascade');
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
        Schema::drop('orders');
    }
}