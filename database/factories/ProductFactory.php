<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100, 1000),
            'slug' => Str::slug($name),
            'image' => '\product\template.png',
            'category_id' => Category::get()->random()->id,
            'company_id' => Company::get()->random()->id
        ];
    }
}
