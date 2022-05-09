<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->word,
            'description' => $this->faker->text
            //'image' => $this->image(public_path('images'),400,300, null, false)

        ];
    }
}