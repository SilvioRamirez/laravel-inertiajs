<?php

namespace Database\Seeders;
use Database\Seeders\EmpleadosSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleAdnPermissionSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* Artisan::call('db:seed', [
            '--class' => RoleSeeder::class,
            '--class' => PermissionSeeder::class,
            '--class' => UsersSeeder::class,
            '--class' => RoleAdnPermissionSeeder::class,
            '--class' => EmpleadosSeeder::class,
        ]); */

        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            UsersSeeder::class,
            RoleAdnPermissionSeeder::class,
            EmpleadosSeeder::class,
        ]);

    }
}
