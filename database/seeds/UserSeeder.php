<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class UserSeeder extends Seeder
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
	        DB::table('users')->insert([
	            'name' => $faker->name,
                'email' => $faker->email,
                'address'=> $faker->address,
                'contectno'=>$faker->numberBetween(10),
	            'password' => bcrypt('secret'),
	        ]);
	}
}
    
}
