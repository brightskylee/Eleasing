<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestedRoommatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requested_roommates', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('first_name', 65535)->nullable();
			$table->text('last_name', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('requested_roommates');
	}

}
