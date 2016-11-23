<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsJsonControllerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events_json_controller', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('event_type', 30);
			$table->text('message', 65535);
			$table->bigInteger('user_id');
			$table->text('data', 65535)->nullable();
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
		Schema::drop('events_json_controller');
	}

}
