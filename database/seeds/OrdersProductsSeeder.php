<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class OrdersProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders_id = DB::table('orders')->pluck('id');
        $products_id = DB::table('products')->pluck('id');
        $faker = Factory::create();
        foreach (range(1,50) as $index) {
	        DB::table('order_products')->insert([
                'orders_id' => $faker->randomElement($orders_id),
                'products_id' => $faker->randomElement($products_id),      
	        ]);
	    }   
	
    }
}
