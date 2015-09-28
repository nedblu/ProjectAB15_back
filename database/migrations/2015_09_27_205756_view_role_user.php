<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewRoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW view_role_user AS
                        SELECT users.*, roles.name as role, roles.slug, roles.level 
                        FROM users 
                        JOIN role_user 
                        ON users.id = role_user.user_id 
                        JOIN roles 
                        ON roles.id = role_user.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW view_role_user");
    }
}
