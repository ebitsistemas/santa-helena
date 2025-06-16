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
                'nome' => 'Mussarela 1,0Kg',
                'descricao' => 'Comprimento 8cm; Largura 9cm; Altura 9 cm; Peso 1 kilo',
                'imagem' => 'images/mussarela-01.jpg'
            ],
            [
                'nome' => 'Mussarela 2,0Kg',
                'descricao' => 'Comprimento 16cm; Largura 9cm; Altura 9 cm; Peso 2 kilo',
                'imagem' => 'images/mussarela-02.jpg'
            ],
            [
                'nome' => 'Mussarela 4Kg',
                'descricao' => 'Comprimento 26cm; Largura 12cm; Altura 10 cm; Peso 4 kilo',
                'imagem' => 'images/mussarela-03.jpg'
            ],
            [
                'nome' => 'Mussarela 5Kg',
                'descricao' => 'Comprimento 48.5cm; Largura 9cm; Altura 9 cm; Peso 5 kilo',
                'imagem' => 'images/mussarela-04.jpg'
            ]
        ];

        // Itera sobre a lista e cria um registro para cada produto
        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
