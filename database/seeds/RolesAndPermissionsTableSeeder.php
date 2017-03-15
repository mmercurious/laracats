<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Role::create(['name' => 'admin', 'label' => 'Sites admin']);
                 
        \App\Permission::create(['name' => 'can-add-posts', 'label' => 'Can add posts']);*/

        Role::create(['name' => 'admin', 'label' => 'Sites admin']);
        Role::create(['name' => 'basicUser', 'label' => 'Basic User']);

        Permission::create(['name' => 'can-add-cats', 'label' => 'Can add cats']);
        Permission::create(['name' => 'can-edit-users', 'label' => 'Can edit users']);
        Permission::create(['name' => 'can-edit-all-cats', 'label' => 'Can edit all cats']);  

        Role::first()->permissions()->attach(Permission::find(1));
        Role::first()->permissions()->attach(Permission::find(2));
        Role::first()->permissions()->attach(Permission::find(3));

        Role::find(2)->permissions()->attach(Permission::find(1));
    }
}
