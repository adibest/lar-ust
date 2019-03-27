<?php

use Illuminate\Database\Seeder;
use App\Model\SantriModel;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SantriModel::truncate();
        SantriModel::insert([
        	[
        	'nama' => 'Suryo',
        	'email' => 'sur@gmail.com',
        	'password' => bcrypt(123),
        	'gender' => 1
        	],
        	[
        	'nama' => 'Fiaas',
        	'email' => 'asfi@gmail.com',
        	'password' => bcrypt("asd"),
        	'gender' => 0
        	]
        ]);
    }
}
