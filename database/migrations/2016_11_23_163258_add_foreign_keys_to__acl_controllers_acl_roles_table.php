<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAclControllersAclRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_acl_controllers_acl_roles', function(Blueprint $table)
		{
			$table->foreign('acl_controller_id', 'fk_acl_controller_acl_role')->references('id')->on('acl_controllers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('acl_role_id', 'fk_acl_role_acl_controller')->references('id')->on('acl_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_acl_controllers_acl_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_acl_controller_acl_role');
			$table->dropForeign('fk_acl_role_acl_controller');
		});
	}

}
