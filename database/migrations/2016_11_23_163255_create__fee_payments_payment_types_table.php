<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeePaymentsPaymentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_fee_payments_payment_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('fee_payment_id')->unsigned()->nullable()->index('fk_fee_payments_id_idx');
			$table->bigInteger('payment_type_id')->unsigned()->nullable()->index('fk_fee_payment_types_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_fee_payments_payment_types');
	}

}
