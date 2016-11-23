<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAclResponsibilitiesAclRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_acl_responsibilities_acl_roles', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('acl_responsibility_id')->unsigned()->nullable()->index('fk_acl_responsibility_acl_role_idx');
			$table->bigInteger('acl_role_id')->unsigned()->nullable()->index('fk_acl_role_acl_responsibility_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_acl_responsibilities_acl_roles');
	}

}
