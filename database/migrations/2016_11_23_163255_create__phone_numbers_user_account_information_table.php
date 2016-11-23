<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhoneNumbersUserAccountInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_phone_numbers_user_account_information', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('phone_number_id')->nullable();
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
		Schema::drop('_phone_numbers_user_account_information');
	}

}
