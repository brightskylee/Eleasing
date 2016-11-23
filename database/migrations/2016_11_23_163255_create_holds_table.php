<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHoldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holds', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->dateTime('start_datetime');
			$table->dateTime('end_datetime');
			$table->text('comment', 65535)->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->dateTime('creation_datetime')->nullable();
			$table->dateTime('removal_datetime')->nullable();
			$table->dateTime('persist_until_datetime')->nullable();
			$table->boolean('is_active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('holds');
	}

}
