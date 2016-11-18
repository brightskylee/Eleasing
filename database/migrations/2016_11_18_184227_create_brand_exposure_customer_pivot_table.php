<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandExposureCustomerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_brand_exposure_customer', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('brand_exposure_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('brand_exposure_id')->references('id')->on('brand_exposures')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_brand_exposure_customer');
    }
}
