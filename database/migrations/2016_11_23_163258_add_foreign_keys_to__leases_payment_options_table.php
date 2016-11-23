<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeasesPaymentOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_leases_payment_options', function(Blueprint $table)
		{
			$table->foreign('lease_id', 'fk_lease_payment_option')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('payment_option_id', 'fk_payment_option_lease')->references('id')->on('payment_options')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_leases_payment_options', function(Blueprint $table)
		{
			$table->dropForeign('fk_lease_payment_option');
			$table->dropForeign('fk_payment_option_lease');
		});
	}

}
