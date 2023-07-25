<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CostumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => User::inRandomOrder()->first()->id,
            'user_id' => 4,
            'name' => $this->faker->name(50),
            'email' => $this->faker->unique()->freeEmail(),
            'status' => $this->faker->randomElement(['NEW COSTUMER', 'LOYAL COSTUMER']),
        ];
    }
}
