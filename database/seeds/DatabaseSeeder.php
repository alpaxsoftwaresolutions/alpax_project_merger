<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_employee = new Role();
	    $role_employee->name = 'guest';
	    $role_employee->description = 'A Guest User';
	    $role_employee->save();
	    $role_manager = new Role();
	    $role_manager->name = 'admin';
	    $role_manager->description = 'Admin User';
	    $role_manager->save();
        $role_employee = Role::where('name', 'guest')->first();
	    $role_manager  = Role::where('name', 'admin')->first();
	    $employee = new User();
	    $employee->name = 'Raj';
	    $employee->email = 'raj@alpax.ph';
	    $employee->password = bcrypt('secret');
	    $employee->save();
	    $employee->roles()->attach($role_manager);
	    $manager = new User();
	    $manager->name = 'Sunil';
	    $manager->email = 'sunil@alpax.ph';
	    $manager->password = bcrypt('secret');
	    $manager->save();
	    $manager->roles()->attach($role_employee);

    }
}
