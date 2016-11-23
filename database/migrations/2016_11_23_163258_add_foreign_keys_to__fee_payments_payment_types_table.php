<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeePaymentsPaymentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_fee_payments_payment_types', function(Blueprint $table)
		{
			$table->foreign('fee_payment_id', 'fk_fee_payment_fee_payment_type')->references('id')->on('fee_payments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('payment_type_id', 'fk_fee_payment_type_fee_payment')->references('id')->on('payment_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_fee_payments_payment_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_fee_payment_fee_payment_type');
			$table->dropForeign('fk_fee_payment_type_fee_payment');
		});
	}

}
