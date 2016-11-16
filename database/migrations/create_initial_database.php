<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * first name
         * middle initial
         * last name
         * gender
         * birthday
         *
         */
        
        $this->upCustomers();
        $this->upAuthentication();
        $this->upDocuments();
    }
    
    function upCustomers()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_initial', 1)->nullable();
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->timestamps();
        });
    }

    function upAuthentication()
    {

    }


    function upDocuments()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
