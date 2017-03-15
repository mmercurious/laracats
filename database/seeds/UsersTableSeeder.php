<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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

        User::find(1)->roles()->attach(Role::first());

        User::find(2)->roles()->attach(Role::where('name', 'basicUser')->first());
        User::find(3)->roles()->attach(Role::where('name', 'basicUser')->first());
    }
}
