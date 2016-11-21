<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerIdToPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Delete the previously existing pivot table
        Schema::dropIfExists('_customers_phone_numbers');
        //Add the in table foreign key to the phone number table
        Schema::table('phone_numbers', function(Blueprint $table){
            $table->bigInteger('customer_id', false, true);
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_numbers', function(Blueprint $table){
            $table->dropForeign('phone_numbers_customer_id_foreign');
            $table->dropColumn('customer_id');
        });
    }
}
