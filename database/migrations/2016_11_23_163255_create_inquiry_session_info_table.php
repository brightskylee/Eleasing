<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInquirySessionInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inquiry_session_info', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('ip_address', 25)->nullable();
			$table->string('user_agent', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inquiry_session_info');
	}

}
