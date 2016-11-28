<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteCustomersEmailAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("_customers_email_addresses");
        Schema::table("email_addresses", function(Blueprint $table){
            $table->bigInteger("customer_id", false, true)->nullable();
            $table->foreign("customer_id", "fk_customer_email_address")
                ->references("id")->on("customers")
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("email_addresses", function(Blueprint $table){
            $table->dropForeign("fk_customer_email_address");
            $table->dropColumn("customer_id");
        });
        Schema::create('_customers_email_addresses', function(Blueprint $table)
        {
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('customer_id')->unsigned()->nullable()->index('fk_customer_id_idx');
            $table->bigInteger('email_address_id')->unsigned()->nullable()->index('fk_email_address_id_idx');
            $table->foreign('customer_id', 'fk_customer_email_address')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('email_address_id', 'fk_email_address_customer')->references('id')->on('email_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
}
