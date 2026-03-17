<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => $this->faker->unique()->numerify('E-####'),
            'full_name' => $this->faker->name(),
            'department' => $this->faker->randomElement(['IT', 'HR', 'Sales', 'Marketing', 'Finance']),
            'position' => $this->faker->jobTitle(),
            'hire_date' => $this->faker->date(),
        ];
    }
}
