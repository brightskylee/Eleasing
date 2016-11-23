<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserAccountsUserAccountInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_user_accounts_user_account_information', function(Blueprint $table)
		{
			$table->foreign('user_account_information_id', 'fk_user_account_information_user_account')->references('id')->on('user_account_information')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_account_id', 'fk_user_account_user_account_information')->references('id')->on('user_accounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_user_accounts_user_account_information', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_account_information_user_account');
			$table->dropForeign('fk_user_account_user_account_information');
		});
	}

}
