<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBedroomsPriceTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_bedrooms_price_tags', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('bedroom_id')->unsigned()->nullable()->index('fk_bedroom_id_idx');
			$table->bigInteger('price_tag_id')->unsigned()->nullable()->index('fk_price_tag_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_bedrooms_price_tags');
	}

}
