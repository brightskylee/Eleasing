<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeePaymentsFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_fee_payments_fees', function(Blueprint $table)
		{
			$table->foreign('fee_id', 'fk_fee_fee_payment')->references('id')->on('fees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fee_payment_id', 'fk_fee_payment_fee')->references('id')->on('fee_payments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_fee_payments_fees', function(Blueprint $table)
		{
			$table->dropForeign('fk_fee_fee_payment');
			$table->dropForeign('fk_fee_payment_fee');
		});
	}

}
