<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(OfferTableSeeder::class);
        $this->call(ProductInkTableSeeder::class);
        $this->call(ProductColorTableSeeder::class);
        $this->call(ProductEquipTableSeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(TechniqueTableSeeder::class);
        $this->call(BannerTableSeeder::class);
        $this->call(EmailcontactTableSeeder::class);
        $this->call(DescriptionTableSeeder::class);

        Model::reguard();
    }
}
