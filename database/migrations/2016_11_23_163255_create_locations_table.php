<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 50);
			$table->string('short_name', 30);
			$table->string('public_name', 100)->nullable();
			$table->string('type', 40);
			$table->string('office_address', 50);
			$table->string('city', 35);
			$table->string('state', 25);
			$table->string('zip', 15);
			$table->decimal('redecoration_fee', 10);
			$table->decimal('activities_fee', 10);
			$table->string('image_name')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
