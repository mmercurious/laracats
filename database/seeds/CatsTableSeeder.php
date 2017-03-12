<?php

use Illuminate\Database\Seeder;
use App\Cat;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Cat')->create([             
        	'name' => 'George',             
        	'description' => 'Ginger cat with a huge heart. Loves to play with feathers.',                     
        ]);

        factory('App\Cat')->create([             
        	'name' => 'Miuku',             
        	'description' => 'A shy black cat, very kind.',                     
        ]);

        factory('App\Cat', 7)->create();
    }
}
