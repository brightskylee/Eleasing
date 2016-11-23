<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersGuarantorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customers_guarantors', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_guarantor')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('guarantor_id', 'fk_guarantor_customer')->references('id')->on('guarantors')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customers_guarantors', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_guarantor');
			$table->dropForeign('fk_guarantor_customer');
		});
	}

}
