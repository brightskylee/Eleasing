<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaseClassifiersLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_lease_classifiers_leases', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('lease_classifier_id')->unsigned()->nullable()->index('fk_lease_classifier_lease_idx');
			$table->bigInteger('lease_id')->unsigned()->nullable()->index('fk_lease_lease_classifier_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_lease_classifiers_leases');
	}

}