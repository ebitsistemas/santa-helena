@extends('layout.app')

@section('title', 'Minha Conta')

@section('content')
    <section class="page-header" style="background-image:url(./assets/images/backgrounds/page-header-contact.jpg);">
        <div class="container"><h2>Galeria</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php" class="nuxt-link-active">Home</a></li>
                <li><span>Galeria</span></li>
            </ul>
        </div>
    </section>
    <section class="gallery_two">
        <div class="container">
            <div class="row masonary-layout">
                @php
                $pasta = './assets/images/gallery';
                $extensoes = ['jpg', 'jpeg', 'png', 'gif']; // Extensões de imagem

                $imagens = [];
                foreach ($extensoes as $extensao) {
                    $pattern = $pasta . '/*.'.$extensao;
                    $imagens_extensao = glob($pattern);
                    if ($imagens_extensao) {
                        $imagens = array_merge($imagens, $imagens_extensao);
                    }
                }
                @endphp
                @if(!empty($imagens))
                    @foreach($imagens as $foto)
                    <div class="col-xl-4 col-lg-6 col-md-6 masonary-item">
                        <div class="gallery_two_single" >
                            <div class="gallery_two_image">
                                <img src="{{ $foto }}">
                                <div class="gallery_two_hover_box">
                                    <div class="gallery_two_icon">
                                        <a href="{{ $foto }}" class="img-popup">
                                            <span class="icon-plus-symbol"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
