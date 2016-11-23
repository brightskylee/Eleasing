<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGuarantorsPhoneNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_guarantors_phone_numbers', function(Blueprint $table)
		{
			$table->foreign('guarantor_id', 'fk_guarantor_phone_number')->references('id')->on('guarantors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('phone_number_id', 'fk_phone_number_guarantor')->references('id')->on('phone_numbers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_guarantors_phone_numbers', function(Blueprint $table)
		{
			$table->dropForeign('fk_guarantor_phone_number');
			$table->dropForeign('fk_phone_number_guarantor');
		});
	}

}
