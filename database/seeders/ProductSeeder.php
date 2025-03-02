<?php

// seed data by running in cli: php artisan migrate:refresh --seed (it restarts the db data for product with the data listed below)


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product 1',
            'detail' => 'Product 1 detail'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product 2',
            'detail' => 'Product 2 detail'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product 3',
            'detail' => 'Product 3 detail'
        ]);
        $product->save();
    }
}
