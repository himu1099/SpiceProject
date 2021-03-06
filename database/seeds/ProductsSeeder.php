<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag_id = DB::table('tags')->pluck('id');
        $faker = Factory::create();
        foreach (range(1,50) as $index) {
	        DB::table('products')->insert([
                'name' => $faker->word,
                'price' =>$faker->numberBetween(1000,10000),
                'quantity'=>$faker->numberBetween(1,1000),
                'tag_id' => $faker->randomElement($tag_id),     
	        ]);
	    }
    }
}
