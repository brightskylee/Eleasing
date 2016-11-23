<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiSessionsApiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ci_sessions_api', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('session_id', 40)->default('0')->unique('unique_sess_id');
			$table->string('ip_address', 45)->default('0');
			$table->string('user_agent', 120);
			$table->integer('last_activity')->unsigned()->default(0)->index('last_activity_idx');
			$table->text('user_data', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ci_sessions_api');
	}

}
