<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerEnvelopesCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customer_envelopes_customers', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_customer_envelope')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_envelope_id', 'fk_customer_envelope_customer')->references('id')->on('customer_envelopes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customer_envelopes_customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_customer_envelope');
			$table->dropForeign('fk_customer_envelope_customer');
		});
	}

}
