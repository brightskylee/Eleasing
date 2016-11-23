<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuarantorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guarantors', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('first_name', 35);
			$table->string('last_name', 35);
			$table->boolean('is_active')->default(1);
			$table->boolean('is_verified')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guarantors');
	}

}
