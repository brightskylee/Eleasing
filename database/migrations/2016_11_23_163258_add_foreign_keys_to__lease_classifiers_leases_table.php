<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeaseClassifiersLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_lease_classifiers_leases', function(Blueprint $table)
		{
			$table->foreign('lease_classifier_id', 'fk_lease_classifier_lease')->references('id')->on('lease_classifiers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_lease_classifier')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_lease_classifiers_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_lease_classifier_lease');
			$table->dropForeign('fk_lease_lease_classifier');
		});
	}

}
