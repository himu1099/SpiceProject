<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = DB::table('users')->pluck('id');
        $faker = Factory::create();
        foreach (range(1,50) as $index) {
	        DB::table('orders')->insert([
                'status' => $faker->word,
                'amount' =>$faker->numberBetween(2000,10000),
                'quantity'=>$faker->numberBetween(1,10),
                'user_id' => $faker->randomElement($user_id),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
               
	        ]);
	    }
    }
}
