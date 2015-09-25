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
		DB::table('roles')->insert(['name' => 'SUPPORT','slug' => str_slug('SUPPORT'),'description' => 'Account for Support, please don\'t login here.','level' => 1,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('roles')->insert(['name' => 'OWNER','slug' => str_slug('OWNER'),'description' => 'Main account for the OWNER, with all permissions.','level' => 2,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('roles')->insert(['name' => 'ADMIN','slug' => str_slug('ADMIN'),'description' => 'Use this for people that have a level for delete things and modify configs.','level' => 3,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('roles')->insert(['name' => 'EDITOR','slug' => str_slug('EDITOR'),'description' => 'Use this for people that helps to fix typos.','level' => 4,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}