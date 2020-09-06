<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategoriesSeeder::class,
            TagsSeeder::class,
            ProductsSeeder::class,
            OrdersSeeder::class,
            OrdersProductsSeeder::class,
        ]);
    
    }
}
