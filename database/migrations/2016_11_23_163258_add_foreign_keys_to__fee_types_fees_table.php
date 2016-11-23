<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeeTypesFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_fee_types_fees', function(Blueprint $table)
		{
			$table->foreign('fee_id', 'fk_fee_fee_type')->references('id')->on('fees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fee_type_id', 'fk_fee_type_fee')->references('id')->on('fee_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_fee_types_fees', function(Blueprint $table)
		{
			$table->dropForeign('fk_fee_fee_type');
			$table->dropForeign('fk_fee_type_fee');
		});
	}

}
