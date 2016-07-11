<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaiversTable extends Migration
{
    
    public function up()
    {
        Schema::create('waivers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            // Schema declaration
            // Constraints declaration
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('waivers');
    }
}
