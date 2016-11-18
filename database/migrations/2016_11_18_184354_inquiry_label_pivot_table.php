<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InquiryLabelPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_inquiry_inquiry_label', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('inquiry_label_id',false, true);
            $table->bigInteger('inquiry_id', false, true);

            $table->foreign('inquiry_label_id')->references('id')->on('inquiry_labels')->onDelete('cascade');
            $table->foreign('inquiry_id')->references('id')->on('inquiries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_inquiry_inquiry_label');
    }
}
