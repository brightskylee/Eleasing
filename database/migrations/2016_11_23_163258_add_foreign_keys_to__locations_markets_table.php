<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocationsMarketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_locations_markets', function(Blueprint $table)
		{
			$table->foreign('location_id', 'fk_location_id')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('market_it', 'fk_market_id')->references('id')->on('markets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_locations_markets', function(Blueprint $table)
		{
			$table->dropForeign('fk_location_id');
			$table->dropForeign('fk_market_id');
		});
	}

}
