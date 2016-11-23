<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAclObjectsAclRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_acl_objects_acl_roles', function(Blueprint $table)
		{
			$table->foreign('acl_object_id', 'fk_acl_object_acl_role')->references('id')->on('acl_objects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('acl_role_id', 'fk_acl_role_acl_object')->references('id')->on('acl_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_acl_objects_acl_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_acl_object_acl_role');
			$table->dropForeign('fk_acl_role_acl_object');
		});
	}

}
