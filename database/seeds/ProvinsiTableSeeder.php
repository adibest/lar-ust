<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i=0; $i < 15; $i++) { 
        	
        	$data[$i] = [
        		'nama'		=> $faker->word,
        		'created_at'    => now(),
                'updated_at'    => now(),
        	];
        }

        DB::table('provinsi')->truncate();
        DB::table('provinsi')->insert($data);
    }
}
