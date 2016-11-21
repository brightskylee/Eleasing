<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneTypeIdToPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_numbers', function(Blueprint $table){
            $table->bigInteger('phone_number_type_id', false, true)->nullable();
            $table->foreign('phone_number_type_id')->references('id')->on('phone_number_types');
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
            $table->dropForeign('phone_numbers_phone_number_type_id_foreign');
            $table->dropColumn('phone_number_type_id');
        });
    }
}
