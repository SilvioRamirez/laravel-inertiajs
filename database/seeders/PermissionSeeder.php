<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\RoleHasPermission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create([
            'name' => 'ver:empleados',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'ver:users',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'ver:roles',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'ver:permissions',
            'guard_name' => 'web',
        ]);

        Permission::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
    }
}
