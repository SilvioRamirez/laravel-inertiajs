<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAdnPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('name', 'user')->first();
        $role->givePermissionTo('ver:empleados');

        $role = Role::where('name', 'admin')->first();
        $role->givePermissionTo('ver:empleados');
        $role->givePermissionTo('ver:users');
        $role->givePermissionTo('ver:roles');
        $role->givePermissionTo('ver:permissions');
        $role->givePermissionTo('admin');

    }
}
