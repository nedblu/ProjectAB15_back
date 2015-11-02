<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('roles')->insert(['name' => 'Soporte','slug' => str_slug('SUPPORT'),'description' => 'Account for Support, please don\'t login here.','level' => 1,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('roles')->insert(['name' => 'Propietario','slug' => str_slug('OWNER'),'description' => 'Main account for the OWNER, with all permissions.','level' => 2,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);	
		DB::table('roles')->insert(['name' => 'Administrador','slug' => str_slug('ADMIN'),'description' => 'Use this for people that have a level for delete things, modify configs and users.','level' => 3,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('roles')->insert(['name' => 'Moderador','slug' => str_slug('MODERATOR'),'description' => 'Can edit,modify,delete and create any item','level' => 4,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('roles')->insert(['name' => 'Editor','slug' => str_slug('EDITOR'),'description' => 'Use this for people that helps to fix typos, Can\'t create new things.','level' => 5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}