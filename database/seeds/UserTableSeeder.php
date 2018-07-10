<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'employee')->first();
        $role_manager  = Role::where('name', 'manager')->first();
        $employee = new User();
        $employee->username = 'Employee';
        $employee->email = 'employee@example.com';
        $employee->password = Hash::make('secret');
        $employee->save();
        $employee->roles()->attach($role_employee);
        $manager = new User();
        $manager->username = 'Manager';
        $manager->email = 'manager@example.com';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
