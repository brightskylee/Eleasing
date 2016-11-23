<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('price_tags', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('term');
			$table->integer('installments');
			$table->string('payment', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('price_tags');
	}

}
