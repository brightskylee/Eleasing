<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsJsonControllerCallsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs_json_controller_calls', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->text('call', 65535);
			$table->bigInteger('user_id');
			$table->text('session_data', 65535);
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logs_json_controller_calls');
	}

}
