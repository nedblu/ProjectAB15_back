<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('role_user')->insert(['role_id' => 1,'user_id' => 1,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('role_user')->insert(['role_id' => 1,'user_id' => 2,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('role_user')->insert(['role_id' => 2,'user_id' => 3,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('role_user')->insert(['role_id' => 5,'user_id' => 4,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        DB::table('role_user')->insert(['role_id' => 3,'user_id' => 5,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
		DB::table('role_user')->insert(['role_id' => 4,'user_id' => 6,'created_at' => \Carbon\Carbon::now()->toDateTimeString(),'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
    }
}