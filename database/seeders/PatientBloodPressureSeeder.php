<?php

namespace Database\Seeders;

use App\Models\BloodPressure;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientBloodPressureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = Patient::take(10)->get();

        $patients->each(function ($patient) {
            BloodPressure::factory()->create([
                'patient_id' => $patient->id,
            ]);
        });
    }
}
