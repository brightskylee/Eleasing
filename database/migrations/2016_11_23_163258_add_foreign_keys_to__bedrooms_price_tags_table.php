<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBedroomsPriceTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_bedrooms_price_tags', function(Blueprint $table)
		{
			$table->foreign('bedroom_id', 'fk_bedroom_price_tag')->references('id')->on('bedrooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('price_tag_id', 'fk_price_tag_bedroom')->references('id')->on('price_tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_bedrooms_price_tags', function(Blueprint $table)
		{
			$table->dropForeign('fk_bedroom_price_tag');
			$table->dropForeign('fk_price_tag_bedroom');
		});
	}

}
