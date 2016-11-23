<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_options', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->boolean('selected_payment_method')->default(0);
			$table->dateTime('selection_datetime')->nullable();
			$table->boolean('wants_checks')->default(0);
			$table->boolean('wants_ach')->default(0);
			$table->string('ach_account_holder_type', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment_options');
	}

}
