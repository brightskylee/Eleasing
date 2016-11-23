<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBedroomsHoldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_bedrooms_holds', function(Blueprint $table)
		{
			$table->foreign('bedroom_id', 'fk_bedroom_hold')->references('id')->on('bedrooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('hold_id', 'fk_hold_bedroom')->references('id')->on('holds')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_bedrooms_holds', function(Blueprint $table)
		{
			$table->dropForeign('fk_bedroom_hold');
			$table->dropForeign('fk_hold_bedroom');
		});
	}

}
