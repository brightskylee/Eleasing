<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerEnvelopesLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customer_envelopes_leases', function(Blueprint $table)
		{
			$table->foreign('customer_envelope_id', 'fk_customer_envelopes_leases')->references('id')->on('customer_envelopes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_leases_customer_envelopes')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customer_envelopes_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_envelopes_leases');
			$table->dropForeign('fk_leases_customer_envelopes');
		});
	}

}
