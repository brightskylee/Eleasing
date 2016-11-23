<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaseMovementLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lease_movement_logs', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('to_bedroom_id');
			$table->bigInteger('from_bedroom_id');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->bigInteger('lease_id');
			$table->bigInteger('moving_user_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lease_movement_logs');
	}

}
