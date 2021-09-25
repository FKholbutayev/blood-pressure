<?php

namespace Database\Factories;

use App\Models\BloodPressure;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodPressureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodPressure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_id' => Patient::factory()->create()->id,
            'systolic_pressure' => rand(100, 200),
            'diastolic_pressure' => rand(10, 100),
        ];
    }
}
