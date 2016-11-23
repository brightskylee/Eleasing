<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesGuarantorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_email_addresses_guarantors', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('email_address_id')->unsigned()->nullable()->index('fk_email_address_guarantor_idx');
			$table->bigInteger('guarantor_id')->unsigned()->nullable()->index('fk_guarantor_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_email_addresses_guarantors');
	}

}
