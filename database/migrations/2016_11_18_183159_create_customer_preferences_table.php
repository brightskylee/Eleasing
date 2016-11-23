<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_preferences', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->boolean("roommate_matching");
            $table->boolean("have_pets");
            $table->boolean("want_furniture");
            $table->integer("bedroom_count");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_preferences');
    }
}
