<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('fullslate_id', 25)->nullable();
			$table->dateTime('fullslate_appt_time')->nullable();
			$table->string('leasing_agent_name', 50)->nullable();
			$table->string('fullslate_service', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appointments');
	}

}
