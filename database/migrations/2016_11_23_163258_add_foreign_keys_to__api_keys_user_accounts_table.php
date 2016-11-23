<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApiKeysUserAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_api_keys_user_accounts', function(Blueprint $table)
		{
			$table->foreign('api_key_id', 'fk_api_key_user_account')->references('id')->on('api_keys')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_account_id', 'fk_user_account_api_key')->references('id')->on('user_accounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_api_keys_user_accounts', function(Blueprint $table)
		{
			$table->dropForeign('fk_api_key_user_account');
			$table->dropForeign('fk_user_account_api_key');
		});
	}

}
