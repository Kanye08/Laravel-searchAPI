<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(50),
            'isbn' => $this->faker->text(14),
            'authors' => $this->faker->text(250),
            'country' => $this->faker->text(50),
            'number_of_pages' => $this->faker->randomDigit(),
            'publisher' => $this->faker->text(50),
            'release_date' => $this->faker->date(),

        ];
    }
}