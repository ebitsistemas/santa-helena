<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = [
            [
                'nome' => 'Mussarela 1,0Kg',
                'descricao' => 'Comprimento 8cm; Largura 9cm; Altura 9 cm; Peso 1 kilo',
                'imagem' => 'assets/images/mussarela-01.jpg'
            ],
            [
                'nome' => 'Mussarela 2,0Kg',
                'descricao' => 'Comprimento 16cm; Largura 9cm; Altura 9 cm; Peso 2 kilo',
                'imagem' => 'assets/images/mussarela-02.jpg'
            ],
            [
                'nome' => 'Mussarela 4Kg',
                'descricao' => 'Comprimento 26cm; Largura 12cm; Altura 10 cm; Peso 4 kilo',
                'imagem' => 'assets/images/mussarela-03.jpg'
            ],
            [
                'nome' => 'Mussarela 5Kg',
                'descricao' => 'Comprimento 48.5cm; Largura 9cm; Altura 9 cm; Peso 5 kilo',
                'imagem' => 'assets/images/mussarela-04.jpg'
            ]
        ];

        return view('home', compact('produtos'));
    }
    public function galeria()
    {
        return view('galeria');
    }
}
