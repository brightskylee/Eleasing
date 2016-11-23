<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingSpotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parking_spots', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('year', 25)->nullable();
			$table->string('tag', 30)->nullable();
			$table->dateTime('available_datetime');
			$table->string('passcode', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parking_spots');
	}

}
