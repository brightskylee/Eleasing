<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmailAddressesGuarantorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_email_addresses_guarantors', function(Blueprint $table)
		{
			$table->foreign('email_address_id', 'fk_email_address_guarantor')->references('id')->on('email_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('guarantor_id', 'fk_guarantor_email_address')->references('id')->on('guarantors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_email_addresses_guarantors', function(Blueprint $table)
		{
			$table->dropForeign('fk_email_address_guarantor');
			$table->dropForeign('fk_guarantor_email_address');
		});
	}

}
