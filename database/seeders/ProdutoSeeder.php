<?php

namespace Database\Seeders;

use App\Models\Produto; // Importe o modelo Produto
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sua lista de produtos
        $produtos = [
            [
                'nome' => 'Mussarela 800gr',
                'imagem' => 'images/mussarela-01.jpg'
            ],
            [
                'nome' => 'Mussarela 1,5Kg',
                'imagem' => 'images/mussarela-02.jpg'
            ],
            [
                'nome' => 'Mussarela 4Kg',
                'imagem' => 'images/mussarela-03.jpg'
            ],
            [
                'nome' => 'Mussarela 5Kg',
                'imagem' => 'images/mussarela-04.jpg'
            ]
        ];

        // Itera sobre a lista e cria um registro para cada produto
        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
