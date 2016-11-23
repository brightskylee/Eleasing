<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBedroomsLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_bedrooms_leases', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('bedroom_id')->unsigned()->nullable()->index('fk_bedroom_id_idx');
			$table->bigInteger('lease_id')->unsigned()->nullable()->index('fk_lease_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_bedrooms_leases');
	}

}
