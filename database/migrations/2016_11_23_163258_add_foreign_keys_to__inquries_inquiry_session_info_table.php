<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInquriesInquirySessionInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_inquries_inquiry_session_info', function(Blueprint $table)
		{
			$table->foreign('inquiry_id', 'fk_inquiry_inquiry_session_info')->references('id')->on('inquiries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('inquiry_session_info_id', 'fk_inquiry_session_info_inquiry')->references('id')->on('inquiry_session_info')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_inquries_inquiry_session_info', function(Blueprint $table)
		{
			$table->dropForeign('fk_inquiry_inquiry_session_info');
			$table->dropForeign('fk_inquiry_session_info_inquiry');
		});
	}

}
