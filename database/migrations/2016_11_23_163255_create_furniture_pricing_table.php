<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFurniturePricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('furniture_pricing', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->decimal('full_furniture_price', 15, 10);
			$table->decimal('partial_living_area_price', 15, 10)->nullable();
			$table->decimal('partial_bedroom_price', 15, 10)->nullable();
			$table->string('furniture_pricing_type', 35)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('furniture_pricing');
	}

}
