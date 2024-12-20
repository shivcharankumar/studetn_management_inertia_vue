<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Section;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'class_id' => Section::inRandomOrder()->first()->class_id, // Class ID को Section से प्राप्त करें
            'section_id' => Section::inRandomOrder()->first()->id, // Section ID सेट करें
        ];
    }
}
