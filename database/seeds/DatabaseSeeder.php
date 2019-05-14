<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'A Admin User';
        $role_employee->save();
        
        $role_manager = new Role();
        $role_manager->name = 'sales manager';
        $role_manager->description = 'A Sales Manager User';
        $role_manager->save();
        
        $role_manager = new Role();
        $role_manager->name = 'sales agent';
        $role_manager->description = 'A Sales Agent User';
        $role_manager->save();
        
        $role_manager = new Role();
        $role_manager->name = 'canvaser manager';
        $role_manager->description = 'A Canvaser Manager User';
        $role_manager->save();
        
        $role_manager = new Role();
        $role_manager->name = 'canvaser agent';
        $role_manager->description = 'A Canvaser Agent User';
        $role_manager->save();
        
        $role_admin = Role::where('name', 'admin')->first();
        $employee = new User();
        $employee->name = 'Demo Admin';
        $employee->email = 'admin@example.com';
        $employee->password = bcrypt('admin');
        $employee->save();
        $employee->roles()->attach($role_admin);
    }
}
