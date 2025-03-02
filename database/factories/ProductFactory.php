<?php
// get test data when refreshing by running in cli: php artisan migrate:refresh --seed (it restarts the db data for product with the data listed below)

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'detail' => $this->faker->text(200)
        ];
    }
}
