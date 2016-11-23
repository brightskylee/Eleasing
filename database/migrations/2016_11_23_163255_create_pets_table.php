<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pets', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('type', 65535)->nullable();
			$table->boolean('documentation')->nullable();
			$table->text('breed', 65535)->nullable();
			$table->integer('weight')->nullable();
			$table->boolean('is_residing')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pets');
	}

}
