<?php

use Illuminate\Database\Seeder;

class EmailcontactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('emailcontacts')->insert(['name' => 'David Aguilar','email' => 'carlosaguilarnet@gmail.com','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
		DB::table('emailcontacts')->insert(['name' => 'Felipe Pérez','email' => 'perez.camargo7@gmail.com','user_id' => '1','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00']);
    }
}