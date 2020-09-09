<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = DB::table('categories')->pluck('id');
        $faker = Factory::create();
        foreach (range(1,50) as $index) {
	        DB::table('tags')->insert([
                'name' => $faker->word,
                'category_id' => $faker->randomElement($category_id), 
	        ]);
	    }
    }
}
