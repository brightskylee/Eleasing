<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteCustomersInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists("_customers_inquiries");
        Schema::table("inquiries", function(Blueprint $table){
            $table->bigInteger("customer_id", false, true);
            $table->foreign("customer_id", "fk_customer_inquiry")
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
        Schema::table("inquiries", function(Blueprint $table){
            $table->dropForeign("fk_customer_inquiry");
            $table->dropColumn("customer_id");
        });
        Schema::create('_customers_inquiries', function(Blueprint $table)
        {
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('customer_id')->unsigned()->nullable()->index('fk_customer_id_idx');
            $table->bigInteger('inquiry_id')->unsigned()->nullable()->index('fk_inquiry_id_idx');
            $table->foreign('customer_id', 'fk_customer_inquiry')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('inquiry_id', 'fk_inquiry_customer')->references('id')->on('inquiries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });

    }
}
