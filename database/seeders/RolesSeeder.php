<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect([
            'Admin',
            'Doctor',
            'Nurse',
        ]);

        $roles->each(function ($role) {
            return DB::table('roles')->insert([
                'title' => $role,
                'created_at' => Carbon::now()
            ]);
        });
    }
}
