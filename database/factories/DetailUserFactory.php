<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'about_me' => $this->faker->paragraph(),
            'address' => $this->faker->sentence(),
            'phone_number' => $this->faker->randomDigit(),
            'birth_place' => $this->faker->word(),
            'birth_date' => $this->faker->date('Y_m_d'),
            'photo' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'users_id' => mt_rand(1,5)
        ];
    }
}
