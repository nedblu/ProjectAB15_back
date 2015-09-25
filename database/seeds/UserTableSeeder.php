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
		DB::table('users')->insert(['first_name' => 'Carlos David','last_name' => 'Aguilar Ruiz','username' => 'david_support','email' => 'carlosaguilarnet@gmail.com','password' => Hash::make('devtest'),'active' => '1','code' => str_random(16), 'last_login' => '0000-00-00 00:00:00','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Felipe Arturo','last_name' => 'Pérez Camargo','username' => 'felipe_support','email' => 'perez.camargo7@gmail.com','password' => Hash::make('devtest'),'active' => '1','code' => str_random(16), 'last_login' => '0000-00-00 00:00:00','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}
