<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailedProductCareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailed_product_care', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->primary(['customer_id','product_id']);
            $table->foreign('customer_id')->references('id')->on('customer');
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
        Schema::dropIfExists('detailed_product_care');
    }
}
