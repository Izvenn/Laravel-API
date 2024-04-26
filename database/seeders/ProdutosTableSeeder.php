<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Use DB facade for convenience

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = [
            [
                'nome' => 'Produto 1',
                'descricao' => 'Descrição do Produto 1',
                'preco' => 19.99,
                'estoque' => 100,
            ],
            [
                'nome' => 'Produto 2',
                'descricao' => 'Descrição do Produto 2',
                'preco' => 24.50,
                'estoque' => 50,
            ],
            // Add more product data as needed
        ];

        // Insert the data into the 'produtos' table
        DB::table('produtos')->insert($produtos);
    }
}
