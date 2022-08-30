<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        $admin = Role::create(['guard_name' => 'api','name' => 'admin']);
        $clerk = Role::create(['guard_name' => 'api','name' => 'clerk']);
        $cashier = Role::create(['guard_name' => 'api','name' => 'cashier']);
        
        User::create([
                'first_name' => '',
                'middle_name' => '',
                'last_name' => '',
                'contact_no' => '',
                'username' => 'Admin',
                'password' => bcrypt('Admin'),
        ])->assignRole($admin);// here add your role 
    }
}
