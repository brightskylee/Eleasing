<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeePaymentsFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_fee_payments_fees', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('fee_id')->unsigned()->nullable()->index('fk_fee_id_idx');
			$table->bigInteger('fee_payment_id')->unsigned()->nullable()->index('fk_fee_payments_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_fee_payments_fees');
	}

}
