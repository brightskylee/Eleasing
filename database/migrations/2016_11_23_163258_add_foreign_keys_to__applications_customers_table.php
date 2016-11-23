<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApplicationsCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_applications_customers', function(Blueprint $table)
		{
			$table->foreign('application_id', 'fk_application_customer')->references('id')->on('applications')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_id', 'fk_customer_application')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_applications_customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_application_customer');
			$table->dropForeign('fk_customer_application');
		});
	}

}
