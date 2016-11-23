<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesUserAccountInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_email_addresses_user_account_information', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('email_address_id')->nullable();
			$table->bigInteger('user_account_information_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_email_addresses_user_account_information');
	}

}
