<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
         foreach (range(1,50) as $index) {
	        DB::table('categories')->insert([
	            'name' => $faker->word,   
	        ]);
	       }
    }
}
