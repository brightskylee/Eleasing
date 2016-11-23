<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAddressesGuarantorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_addresses_guarantors', function(Blueprint $table)
		{
			$table->foreign('address_id', 'fk_address_guarantor')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('guarantor_id', 'fk_guarantor_address')->references('id')->on('guarantors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_addresses_guarantors', function(Blueprint $table)
		{
			$table->dropForeign('fk_address_guarantor');
			$table->dropForeign('fk_guarantor_address');
		});
	}

}
