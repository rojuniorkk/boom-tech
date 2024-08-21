<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cep' => $this->faker->postcode(),
            'rua' => $this->faker->streetName(),
            'bairro' => $this->faker->streetName(),
            'uf' => $this->faker->stateAbbr(),
            'cidade' => $this->faker->city(),
            'numero' => $this->faker->numberBetween(1,100),
            'complemento' => $this->faker->secondaryAddress(),
            'user_id' => User::get()->random()->id
        ];
    }
}
