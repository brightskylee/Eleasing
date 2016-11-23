<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_addresses', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('email_address', 100);
			$table->boolean('is_active')->default(1);
			$table->boolean('is_primary')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_addresses');
	}

}
