@extends('layout.app')

@section('title', 'Minha Conta')

@section('content')
<!-- Banner Section -->
<section class="banner-section banner-one">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(assets/images/slide-1.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <h1>Bem vindo ao Laticínio<br> Santa Helena</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<section class="about_one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about1_img">
                    <div class="about1_shape_1"></div>
                    <img src="{{ url('assets/images/visao-laticinios.jpg') }}" width="325" alt="About-Img">
                    <div class="about1_icon-box">
                        <div class="circle">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="block-title text-left">
                    <p>Sobre</p>
                    <h3>Laticínio Santa Helena</h3>
                    <div class="leaf">
                        <img src="{{ url('assets/images/leaf.png') }}" alt="">
                    </div>
                </div>
                <div class="about_content">
                    <div class="text">
                        <h5>Nossa História</h5>
                        <p>
                            Em janeiro de 2011, a empresa foi assumida pelos sócios proprietários atuais.<br>
                            A capacidade fabril era de apenas 20 mil litros de leite/dia, e processava-se apenas 5-10 mil litros dessa capacidade.<br>
                            Atualmente o processamento chega a 95.000 mil litros; Mensalmente chega até 2,5 milhões de litros de leite, além da venda de leite Spot;<br>
                            Os produtos fabricados são Queijo Mussarela, Soro de Leite, Creme de leite, Creme de soro e Gordura láctea.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service_one" id="produtos">
    <div class="container">
        <div class="block-title text-center">
            <h3>Produtos</h3>
            <div class="leaf">
                <img src="{{ url('assets/images/leaf.png') }}" alt="">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-8">
                <div class="row">
                    <?php
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
                    foreach($produtos as $produto){
                        ?>
                    <div class="col-md-6 mb-3">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content p-4">
                                <h3 class="pb-0"><?= $produto['nome'] ?></h3>
                            </div>
                            <div class="service_1_img">
                                <img src="<?= $produto['imagem'] ?>" alt="Service Image">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <style>
                    table {
                        width: 100%;
                        max-width: 600px;
                        border-collapse: collapse;
                        margin: 0 auto;
                        box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    }

                    th, td {
                        padding: 5px;
                        border: 1px solid #ddd;
                        text-align: center;
                    }

                    th {
                        background-color: rgba(241, 235, 184, 0.5);
                    }

                    tbody tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }

                    tfoot td {
                        font-size: 0.75em;
                        text-align: left;
                        padding: 5px;
                        background-color: #f0f0f0;
                    }

                    .left-align {
                        text-align: left;
                    }
                </style>
                <div class="text-center border p-3" style="background-color: rgba(241, 235, 184, 0.5);">INFORMAÇÃO NUTRICIONAL</div>
                <table>
                    <thead>
                    <tr>
                        <th colspan="4" class="left-align">
                            Porção: 30 g (medida caseira)<br>
                            Porções por embalagem: Cerca de 133 porções
                        </th>
                    </tr>
                    <tr>
                        <th>Componente</th>
                        <th>100 g</th>
                        <th>30 g</th>
                        <th>%VD*</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td>Valor energético (kcal)</td><td>324</td><td>97</td><td>5%</td></tr>
                    <tr><td>Carboidratos totais (g)</td><td>0,6</td><td>0,2</td><td>0%</td></tr>
                    <tr><td>Açúcares totais (g)</td><td>0</td><td>0</td><td>-</td></tr>
                    <tr><td>Açúcares adicionados (g)</td><td>0</td><td>0</td><td>0%</td></tr>
                    <tr><td>Proteínas (g)</td><td>23</td><td>6,8</td><td>14%</td></tr>
                    <tr><td>Gorduras totais (g)</td><td>26</td><td>7,8</td><td>12%</td></tr>
                    <tr><td>Gorduras saturadas (g)</td><td>17</td><td>5</td><td>25%</td></tr>
                    <tr><td>Gorduras trans (g)</td><td>0</td><td>0</td><td>-</td></tr>
                    <tr><td>Fibra alimentar (g)</td><td>0</td><td>0</td><td>0%</td></tr>
                    <tr><td>Sódio (mg)</td><td>632</td><td>190</td><td>8%</td></tr>
                    <tr><td>Cálcio (mg)</td><td>539</td><td>162</td><td>19%</td></tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">* Percentual de valores diários fornecidos pela porção</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
