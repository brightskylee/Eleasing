<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInquriesInquirySessionInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_inquries_inquiry_session_info', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('inquiry_id')->unsigned()->nullable()->index('fk_inquiry_id_idx');
			$table->bigInteger('inquiry_session_info_id')->unsigned()->nullable()->index('fk_inquiry_session_info_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_inquries_inquiry_session_info');
	}

}
