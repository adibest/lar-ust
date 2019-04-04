<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
        	$data[$i] = [
        		'nama'		=> $faker->name,
        		'nip' 		=> $faker->numberBetween($min = 100000000000000, $max = 900000000000000),
        		'gender'	=> $faker->randomElement($array = array ('L','P')),
        		'phone'		=> $faker->numberBetween($min = 10000000000, $max = 90000000000),
        		'email'		=> $faker->freeEmail,
        		'created_at'    => now(),
                'updated_at'    => now(),
        	];
        }

        DB::table('guru')->truncate();
        DB::table('guru')->insert($data);
    }
}
