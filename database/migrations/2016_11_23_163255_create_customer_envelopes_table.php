<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerEnvelopesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_envelopes', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('envelope_id', 32)->unique('envelope_id_UNIQUE');
			$table->boolean('is_manual')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_envelopes');
	}

}
