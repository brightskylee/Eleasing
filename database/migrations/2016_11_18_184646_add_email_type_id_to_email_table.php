<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailTypeIdToEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('email_addresses', function(Blueprint $table){
            $table->bigInteger('email_address_type_id', false, true);
            $table->foreign('email_address_type_id')->references('id')->on('email_address_types');
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
            $table->dropForeign('email_addresses_email_address_type_id_foreign');
            $table->dropColumn('email_address_type_id');
        });
    }
}
