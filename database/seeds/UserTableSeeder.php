<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert(['first_name' => 'David','last_name' => 'Aguilar','username' => 'david_support','email' => 'carlosaguilarnet@gmail.com','password' => Hash::make('Ab15Project@01'),'actived' => '1','banned' => '0','role_id' => '1','last_login' => '0000-00-00 00:00:00','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Felipe','last_name' => 'Pérez','username' => 'felipe_support','email' => 'perez.camargo7@gmail.com','password' => Hash::make('Ab15Project@01'),'actived' => '1','banned' => '0','role_id' => '1','last_login' => '0000-00-00 00:00:00','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('users')->insert(['first_name' => 'David','last_name' => 'Hernández','username' => 'david_hernandez','email' => 'davidbarbosah@gmail.com','password' => Hash::make('Password123'),'actived' => '1','banned' => '0','role_id' => '2','last_login' => '0000-00-00 00:00:00','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('users')->insert(['first_name' => 'Patricia','last_name' => 'Arellano','username' => 'paty_arellano','email' => 'diseno.alphabeta@gmail.com','password' => Hash::make('Password123'),'actived' => '1','banned' => '0','role_id' => '3','last_login' => '0000-00-00 00:00:00','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}
