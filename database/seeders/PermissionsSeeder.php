<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = collect([
            'export_csv_of_practice_staff',
            'export_csv_of_patient_blood'
        ]);

        $permissions->each(function ($permission) {
            return DB::table('permissions')->insert([
                'title' => $permission,
                'created_at' => Carbon::now()
            ]);
        });


    }
}
