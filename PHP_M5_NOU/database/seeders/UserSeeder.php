<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrator',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(5),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'manager',
            'email' => 'mng@mng.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(5),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('mng');

        User::create([
            'name' => 'client',
            'email' => 'client@client.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(5),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole('client');

        // $admin->assignRole('admin');
        // $mng->assignRole('mng');
        // $client->assignRole('client');
    }
}