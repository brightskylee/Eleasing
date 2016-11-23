<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('street_address_1', 100)->nullable();
			$table->string('street_address_2', 100)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip', 20)->nullable();
			$table->string('country', 64)->nullable();
			$table->boolean('is_international')->default(0);
			$table->boolean('is_primary')->default(0);
			$table->boolean('is_active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
