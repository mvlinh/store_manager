<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailedHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailed_history', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement();
            $table->integer('emp_send_id')->unsigned();
            $table->integer('emp_receive_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->foreign('emp_send_id')->references('id')->on('employees');
            $table->foreign('emp_receive_id')->references('id')->on('employees');
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
        Schema::dropIfExists('detailed_history');
    }
}
