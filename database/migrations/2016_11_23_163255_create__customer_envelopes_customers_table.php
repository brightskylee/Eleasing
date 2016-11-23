<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerEnvelopesCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_customer_envelopes_customers', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('customer_envelope_id')->unsigned()->nullable()->index('fk_customer_envelope_customer_idx');
			$table->bigInteger('customer_id')->unsigned()->nullable()->index('fk_customer_customer_envelope_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_customer_envelopes_customers');
	}

}
