<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_access = Permission::all();

        Role::findOrFail(1)->permissions()->sync($admin_access->pluck('id'));

        $doctor_access = $admin_access->filter(function ($permission) {
            return Str::contains($permission, 'patient');
        });

        Role::findOrFail(2)->permissions()->sync($doctor_access->pluck('id'));

    }
}
