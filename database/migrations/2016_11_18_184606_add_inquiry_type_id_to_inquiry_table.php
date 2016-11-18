<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInquiryTypeIdToInquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inquiries', function(Blueprint $table){
            $table->bigInteger('inquiry_type_id', false, true);
            $table->foreign('inquiry_type_id')->references('id')->on('inquiry_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inquiries', function(Blueprint $table){
            $table->dropForeign('inquiries_inquiry_type_id_foreign');
            $table->dropColumn('inquiry_type_id');
        });
    }
}
