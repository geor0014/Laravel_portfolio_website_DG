<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'CU_code' =>$this->faker->slug(),
            'name' => $this->faker->word(),
            'credits' => $this->faker->numberBetween(5, 15),
        ];
    }
}
