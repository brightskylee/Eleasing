<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAclRolesApiKeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_acl_roles_api_keys', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('acl_role_id')->unsigned()->nullable()->index('fk_acl_role_api_key_idx');
			$table->bigInteger('api_key_id')->unsigned()->nullable()->index('fk_api_key_acl_role_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_acl_roles_api_keys');
	}

}
