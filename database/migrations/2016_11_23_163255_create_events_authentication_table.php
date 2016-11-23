<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsAuthenticationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events_authentication', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('event_type', 150);
			$table->text('message', 65535);
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
		Schema::drop('events_authentication');
	}

}
