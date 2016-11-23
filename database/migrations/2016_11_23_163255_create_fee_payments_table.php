<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fee_payments', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('description', 50)->nullable();
			$table->boolean('received')->default(0);
			$table->dateTime('received_datetime')->nullable();
			$table->bigInteger('received_user_id')->nullable();
			$table->boolean('recorded')->default(0);
			$table->dateTime('recorded_datetime')->nullable();
			$table->integer('recorded_user_id')->nullable();
			$table->boolean('canceled')->default(0);
			$table->dateTime('canceled_datetime')->nullable();
			$table->bigInteger('canceled_user_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fee_payments');
	}

}
