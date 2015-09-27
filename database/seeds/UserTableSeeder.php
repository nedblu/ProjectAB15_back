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
		DB::table('users')->insert(['first_name' => 'Carlos David','last_name' => 'Aguilar Ruiz','username' => 'david_support','email' => 'carlosaguilarnet@gmail.com','password' => Hash::make('devtest'),'active' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Felipe Arturo','last_name' => 'Pérez Camargo','username' => 'felipe_support','email' => 'perez.camargo7@gmail.com','password' => Hash::make('devtest'),'active' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Usuario1','last_name' => 'Usuario1','username' => 'usuario1','email' => 'usuario1@gmail.com','password' => Hash::make('devtest'),'active' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Usuario2','last_name' => 'Usuario2','username' => 'usuario2','email' => 'usuario2@gmail.com','password' => Hash::make('devtest'),'active' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Usuario3','last_name' => 'Usuario3','username' => 'usuario3','email' => 'usuario3@gmail.com','password' => Hash::make('devtest'),'active' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
        DB::table('users')->insert(['first_name' => 'Usuario4','last_name' => 'Usuario4','username' => 'usuario4','email' => 'usuario4@gmail.com','password' => Hash::make('devtest'),'active' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}
