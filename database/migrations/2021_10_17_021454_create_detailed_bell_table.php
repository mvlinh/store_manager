<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailedBellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailed_bill', function (Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->primary('bill_id','product_id');
            $table->foreign('bill_id')->references('id')->on('bill');
            $table->foreign('product_id')->references('id')->on('product');
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
        Schema::dropIfExists('detailed_bill');
    }
}
