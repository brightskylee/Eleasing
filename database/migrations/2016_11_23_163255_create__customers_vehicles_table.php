<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_customers_vehicles', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('customer_id');
			$table->integer('vehicle_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_customers_vehicles');
	}

}
