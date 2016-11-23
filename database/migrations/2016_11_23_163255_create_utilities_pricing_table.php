<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilitiesPricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utilities_pricing', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('utilities_pricing_type', 35)->nullable();
			$table->decimal('cost', 15, 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('utilities_pricing');
	}

}
