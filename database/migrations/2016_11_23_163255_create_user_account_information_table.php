<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserAccountInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_account_information', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('first_name', 25)->nullable();
			$table->string('last_name', 25)->nullable();
			$table->string('email_address', 100)->nullable();
			$table->string('work_phone', 25)->nullable();
			$table->integer('phone_ext')->nullable();
			$table->string('position', 25)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_account_information');
	}

}
