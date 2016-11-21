<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerIdToEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Delete the previously existing pivot table
        Schema::dropIfExists('_customers_email_addresses');
        //Add the in table foreign key to the email address table
        Schema::table('email_addresses', function(Blueprint $table){
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
        Schema::table('email_addresses', function(Blueprint $table){
            $table->dropForeign('email_addresses_customer_id_foreign');
            $table->dropColumn('customer_id');
        });
    }
}
