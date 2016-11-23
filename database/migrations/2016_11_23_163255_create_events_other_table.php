<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsOtherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events_other', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('class_name', 35)->nullable();
			$table->string('event_type', 30);
			$table->text('message', 65535);
			$table->bigInteger('user_id')->nullable();
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
		Schema::drop('events_other');
	}

}
