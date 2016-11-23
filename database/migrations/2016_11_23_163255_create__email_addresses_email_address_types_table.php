<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesEmailAddressTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_email_addresses_email_address_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('email_address_id')->unsigned()->nullable()->index('fk_email_address_id_idx');
			$table->bigInteger('email_address_type_id')->unsigned()->nullable()->index('fk_email_address_type_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_email_addresses_email_address_types');
	}

}
