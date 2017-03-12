<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([             
        	'name' => 'Marja Ahonen',             
        	'email' => 'marja.e.ahonen@gmail.com',             
        	'password' => bcrypt('salasana')         
        ]);

        factory('App\User', 2)->create();
    }
}
