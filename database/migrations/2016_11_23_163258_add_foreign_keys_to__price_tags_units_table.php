<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPriceTagsUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_price_tags_units', function(Blueprint $table)
		{
			$table->foreign('price_tag_id', 'fk_price_tag_id')->references('id')->on('price_tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unit_id', 'fk_unit_id')->references('id')->on('units')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_price_tags_units', function(Blueprint $table)
		{
			$table->dropForeign('fk_price_tag_id');
			$table->dropForeign('fk_unit_id');
		});
	}

}
