<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAclRolesApiKeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_acl_roles_api_keys', function(Blueprint $table)
		{
			$table->foreign('acl_role_id', 'fk_acl_role_api_key')->references('id')->on('acl_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('api_key_id', 'fk_api_key_acl_role')->references('id')->on('api_keys')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_acl_roles_api_keys', function(Blueprint $table)
		{
			$table->dropForeign('fk_acl_role_api_key');
			$table->dropForeign('fk_api_key_acl_role');
		});
	}

}
