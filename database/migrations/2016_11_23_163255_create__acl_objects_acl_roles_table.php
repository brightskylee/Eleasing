<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAclObjectsAclRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_acl_objects_acl_roles', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('acl_object_id')->unsigned()->nullable()->index('fk_acl_object_acl_role');
			$table->bigInteger('acl_role_id')->unsigned()->nullable()->index('fk_acl_role_acl_object_idx');
			$table->text('field_permission_list', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_acl_objects_acl_roles');
	}

}
