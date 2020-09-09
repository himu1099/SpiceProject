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
        $order_id = DB::table('orders')->pluck('id');
        $product_id = DB::table('products')->pluck('id');
        $faker = Factory::create();
        foreach (range(1,50) as $index) {
	        DB::table('order_products')->insert([
                'order_id' => $faker->randomElement($order_id),
                'product_id' => $faker->randomElement($product_id),      
	        ]);
	    }   
	
    }
}
