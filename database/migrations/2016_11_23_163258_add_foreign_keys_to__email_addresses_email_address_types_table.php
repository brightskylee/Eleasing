<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmailAddressesEmailAddressTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_email_addresses_email_address_types', function(Blueprint $table)
		{
			$table->foreign('email_address_id', 'fk_email_address_email_address_type')->references('id')->on('email_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('email_address_type_id', 'fk_email_address_type_email_address')->references('id')->on('email_address_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_email_addresses_email_address_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_email_address_email_address_type');
			$table->dropForeign('fk_email_address_type_email_address');
		});
	}

}
