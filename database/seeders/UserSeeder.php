<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
        $newUser = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt(123),
        ]);
        $role = Role::where('name', 'admin')->first();
        $newUser->roles()->attach($role->id);

        // editor
        $newUser = User::create([
            'name' => 'editor',
            'email' => 'editor@example.com',
            'password' => bcrypt(123),
        ]);
        $role = Role::where('name', 'editor')->first();
        $newUser->roles()->attach($role->id);
    }
}
