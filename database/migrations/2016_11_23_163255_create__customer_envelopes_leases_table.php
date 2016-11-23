<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerEnvelopesLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_customer_envelopes_leases', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('customer_envelope_id')->unsigned()->nullable()->index('fk_customer_envelopes_leases_idx');
			$table->bigInteger('lease_id')->unsigned()->nullable()->index('fk_leases_customer_envelopes_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_customer_envelopes_leases');
	}

}
