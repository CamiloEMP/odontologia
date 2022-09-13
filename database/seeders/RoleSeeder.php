<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Patient']);

        Permission::create(['name' => 'appointment.index'])->assignRole($role2);
        Permission::create(['name' => 'appointment.create'])->assignRole($role2);;
        Permission::create(['name' => 'appointment.show'])->assignRole($role2);;
        Permission::create(['name' => 'appointment.store'])->assignRole($role2);;
        Permission::create(['name' => 'appointment.showId'])->assignRole($role2);;
    }
}
