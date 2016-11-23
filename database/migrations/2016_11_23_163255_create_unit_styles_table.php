<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitStylesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unit_styles', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 64);
			$table->integer('bedrooms')->unsigned()->nullable();
			$table->integer('bathrooms')->unsigned()->nullable();
			$table->integer('stories')->nullable();
			$table->string('finish_level', 64)->nullable();
			$table->decimal('rentable_area', 15, 5)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unit_styles');
	}

}
