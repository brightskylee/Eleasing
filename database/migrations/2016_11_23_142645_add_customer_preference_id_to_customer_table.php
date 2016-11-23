<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerPreferenceIdToCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function(Blueprint $table){
            $table->bigInteger('customer_preference_id', false, true)->nullable();
            $table->foreign('customer_preference_id')->references('id')->on('customer_preferences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function(Blueprint $table){
            $table->dropForeign('customers_customer_preference_id_foreign');
            $table->dropColumn('customer_preference_id');
        });
    }
}
