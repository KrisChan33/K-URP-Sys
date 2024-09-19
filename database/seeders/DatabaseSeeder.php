<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //Create Users
        
        $user = User::factory()->create([
            'name' => 'Super admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123'),
        ]);
        
        $user0 = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);

        $user1 = User::factory()->create([
            'name' => 'employee',
            'email' => 'employee@gmail.com',
            'password' => bcrypt('123'),
        ]);

        $user2 = User::factory()->create([
            'name' => 'officer',
            'email' => 'officer@gmail.com',
            'password' => bcrypt('123'),
        ]);

        //Create Roles
        $role = Role::create(['name' => 'superadmin']);
        $role0 = Role::create(['name' => 'admin']);
        $role1 = Role::create(['name' => 'employee']);
        $role2 = Role::create(['name' => 'officer']);

        //Create Permissions
        $permission =  Permission::create(['name' => 'create']);
        $permission1 = Permission::create(['name' => 'update']);
        $permission2 = Permission::create(['name' => 'delete']);
        $permission3 = Permission::create(['name' => 'deleteAny']);
        $permission4 = Permission::create(['name' => 'forceDelete']);
        $permission5 = Permission::create(['name' => 'forceDeleteAny']);
        $permission6 = Permission::create(['name' => 'view']);
        $permission7 = Permission::create(['name' => 'viewAny']);
        $permission8 = Permission::create(['name' => 'restore']);
        $permission9 = Permission::create(['name' => 'reorder']);

        //Assign Role to User
        $user->assignRole($role);
        $user->assignRole($role0);
        $user1->assignRole($role1);
        $user2->assignRole($role2);

        //Assign Permission to the user
        $user->givePermissionTo([$permission, $permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8, $permission9]);
        $user0->givePermissionTo([$permission, $permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8, $permission9]);
        $user1->givePermissionTo([$permission6, $permission7]);
        $user2->givePermissionTo([$permission6, $permission7]);
    }
}