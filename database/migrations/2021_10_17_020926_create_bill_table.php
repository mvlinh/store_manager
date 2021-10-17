<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('emp_care_id')->unsigned();
            $table->integer('emp_seller_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->foreign('emp_care_id')->references('id')->on('employees');
            $table->foreign('emp_seller_id')->references('id')->on('employees');
            $table->foreign('customer_id')->references('id')->on('customer');

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
        Schema::dropIfExists('bill');
    }
}
