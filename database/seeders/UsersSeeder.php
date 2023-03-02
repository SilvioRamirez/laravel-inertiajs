<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* DB::table('users')->insert([
            'name' => 'Sivlio Ramírez',
            'email' => 'silvio.ramirez.m@gmail.com',
            'password' => bcrypt('123123123'),
        ]); */

        $admin = User::create([
            'name' => 'Sivlio Ramírez',
            'email' => 'silvio.ramirez.m@gmail.com',
            'password' => bcrypt('123123123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123123123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user->assignRole('user');
    }
}
