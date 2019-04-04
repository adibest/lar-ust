<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class SantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $provinsi_id = DB::table('provinsi')->pluck('id');

        for ($i=0; $i < 10; $i++) { 
        	
        	$data[$i] = [
        		'nama' 		=> $faker->name,
        		'email'		=> $faker->freeEmail,
        		'gender'	=> $faker->randomElement($array = array ('0','1')),
        		'password'	=> bcrypt('rahasia'),
        		'provinsi_id' => $faker->randomElement($provinsi_id),
        		'created_at'    => now(),
                'updated_at'    => now(),

        	];
        }

        DB::table('santri')->truncate();
        DB::table('santri')->insert($data);
    }
}