<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $mng = Role::create(['name' => 'mng']);
        $client = Role::create(['name' => 'client']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$admin, $mng, $client]);

        Permission::create(['name' => 'teams.index'])->syncRoles([$admin, $mng]);
        Permission::create(['name' => 'teams.show'])->syncRoles([$admin, $mng]);
        Permission::create(['name' => 'teams.create'])->syncRoles([$admin]);
        // Permission::create(['name' => 'teams.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'teams.edit'])->syncRoles([$admin]);
        // Permission::create(['name' => 'teams.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'teams.destroy'])->syncRoles([$admin]);

        Permission::create(['name' => 'players.index'])->syncRoles([$admin, $mng]);
        Permission::create(['name' => 'players.show'])->syncRoles([$admin, $mng]);
        Permission::create(['name' => 'players.create'])->syncRoles([$admin]);
        // Permission::create(['name' => 'players.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'players.edit'])->syncRoles([$admin]);
        // Permission::create(['name' => 'players.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'players.destroy'])->syncRoles([$admin]);

        Permission::create(['name' => 'encounters.index'])->syncRoles([$admin, $mng, $client]);
        Permission::create(['name' => 'encounters.show'])->syncRoles([$admin, $mng, $client]);
        Permission::create(['name' => 'encounters.create'])->syncRoles([$admin]);
        // Permission::create(['name' => 'encounters.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'encounters.edit'])->syncRoles([$admin]);
        // Permission::create(['name' => 'encounters.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'encounters.destroy'])->syncRoles([$admin]);

    }
}
