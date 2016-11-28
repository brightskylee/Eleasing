<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteCustomersPhoneNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("_customers_phone_numbers");
        Schema::table("phone_numbers", function(Blueprint $table){
            $table->bigInteger("customer_id", false, true)->nullable();
            $table->foreign("customer_id", "fk_customer_phone_number")
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
        Schema::table("phone_numbers", function(Blueprint $table){
            $table->dropForeign("fk_customer_phone_number");
            $table->dropColumn("customer_id");
        });

        Schema::create("_customers_phone_numbers", function(Blueprint $table){
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('customer_id')->unsigned()->nullable()->index('fk_customer_id_idx');
            $table->bigInteger('phone_number_id')->unsigned()->nullable()->index('fk_phone_number_id_idx');
            $table->foreign('customer_id', 'fk_customer_phone_number')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('phone_number_id', 'fk_phone_number_customer')->references('id')->on('phone_numbers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
}
