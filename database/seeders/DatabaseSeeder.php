<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Produto; // Import your Product model

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        // Generate and insert 100 random products
        for ($i = 0; $i < 100; $i++) {
            $produto = new Produto;
            $produto->nome = $faker->name;
            $produto->descricao = $faker->paragraph;
            $produto->preco = $faker->randomFloat(2, 0, 100);
            $produto->estoque = $faker->numberBetween(1, 100);

            $produto->save(); // Save the product to the database
        }
    }
}
