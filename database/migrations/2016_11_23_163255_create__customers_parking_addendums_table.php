<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersParkingAddendumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_customers_parking_addendums', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('customer_id')->nullable();
			$table->integer('parking_addendum_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_customers_parking_addendums');
	}

}
