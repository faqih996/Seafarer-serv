<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'address' => $this->faker->sentence(),
            'course' => $this->faker->sentence(),
            'start' => $this->faker->date('Y_m_d'),
            'graduate' => $this->faker->date('Y_m_d'),
            'detail_user_id' => mt_rand(1,5)
        ];
    }
}
