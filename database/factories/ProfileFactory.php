<?php

namespace Database\Factories;

use App\Models\Student;
// use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            
        ];
    }
}
