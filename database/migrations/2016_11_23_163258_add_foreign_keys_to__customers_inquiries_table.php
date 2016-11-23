<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersInquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customers_inquiries', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_inquiry')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('inquiry_id', 'fk_inquiry_customer')->references('id')->on('inquiries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customers_inquiries', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_inquiry');
			$table->dropForeign('fk_inquiry_customer');
		});
	}

}
