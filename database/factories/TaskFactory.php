<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "description" => $this->faker->paragraph(),
            "status" => $this->faker->numberBetween(0, 1),
            "company_id" => $this->faker->numberBetween(1, 5),
            "user_id" => $this->faker->numberBetween(3, 10),
            "start_date" => $this->faker->dateTimeBetween(),
            "deadline" => $this->faker->dateTimeBetween("-1 week, +1 week"),
        ];
    }
}
