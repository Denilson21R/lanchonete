<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'description' => $this->faker->text(),
            'value' => $this->faker->randomFloat(2, 0, 9999999)
        ];
    }
}
