<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApplicationsRequestedRoommatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_applications_requested_roommates', function(Blueprint $table)
		{
			$table->foreign('application_id', 'fk_application_requested_roommate')->references('id')->on('applications')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('requested_roommate_id', 'fk_requested_roommate_application')->references('id')->on('requested_roommates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_applications_requested_roommates', function(Blueprint $table)
		{
			$table->dropForeign('fk_application_requested_roommate');
			$table->dropForeign('fk_requested_roommate_application');
		});
	}

}
