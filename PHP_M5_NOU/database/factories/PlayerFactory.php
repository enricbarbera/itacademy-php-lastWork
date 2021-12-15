<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'email' => $this->faker->email(),
            'license' => $this->faker->randomNumber(8),
            // 'team_id' => $this->faker->numberBetween($min = 1, $max = 4)
            // 'team_id' => $this->faker->randomElement(['1', '2', '3', '4'])
            'team_id' => Team::get()->random()->id
        ];
    }
}
