<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceTagLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('price_tag_logs', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('price_tag_id');
			$table->string('previous_payment', 20);
			$table->string('new_payment', 20);
			$table->dateTime('update_datetime');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('price_tag_logs');
	}

}
