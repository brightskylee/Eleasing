<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerMarketingOutreachPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_customer_marketing_outreach', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('marketing_outreach_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('marketing_outreach_id')->references('id')->on('marketing_outreaches')->onDelete('cascade');
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
        Schema::dropIfExists('_customer_marketing_outreach');
    }
}
