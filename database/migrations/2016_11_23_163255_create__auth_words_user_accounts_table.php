<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthWordsUserAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_auth_words_user_accounts', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('auth_word_id')->nullable();
			$table->bigInteger('user_account_id')->nullable()->unique('UniqueUserAccount');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_auth_words_user_accounts');
	}

}
