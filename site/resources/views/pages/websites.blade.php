@extends('base')
@section('content')


@push('styles')
<link rel="stylesheet" type="text/css" href="{{mix('css/custom-services.css')}}">
@endpush

@component('navbar')
@slot('activeHome')
inactive
@endslot
@slot('activeSobre')
inactive
@endslot
@slot('activeHistorias')
inactive
@endslot
@slot('activeServicos')
active
@endslot
@slot('activeBlog')
inactive
@endslot
@slot('activeContato')
inactive
@endslot
@endcomponent

<div class="texto-lateral">
    <div>
        <h2 class="">EXPOSIÇÃO & COMUNICAÇÃO</h2>
    </div>
</div>

<div class="barra-botoes text-center slideInUp animated-home">
    <a class="btn btn-secondary" href="#firstPage">SITE DELIVERY</a>
    <a class="btn btn-secondary" href="#secondPage">E-COMMERCE</a>
    <a class="btn btn-secondary" href="#thirdPage">SITE INSTITUCIONAL</a>
</div>

<div class="arrow arrow-down mb-4 mr-4">
    <a href="#" id="arrowDown"><i class="fa fa-arrow-down"></i></a>
</div>

<div class="arrow arrow-up mb-4 mr-4">
    <a href="#" id="arrowUp"><i class="fa fa-arrow-up"></i></a>
</div>

<div id="fullPageMultPage">

    {{-- Pré seção --}}

    <div class="section fp-tableCell-home" id="section0" data-anchor="zeroPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 objetos-centro-centro">
                <h2 class="text-center animated-texto-1 bounceInRight">WEBSITES</h2>

                <h5 class="text-center animated-texto-2 bounceInRight">Projetos exclusivos para alavancar o seu negócio</h5>

            </div>

            <div class="col-12 text-center mt-4">
                <img class="home-mockup max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/homemockup.png')}}"/>
            </div>

        </div>

    </div>

    {{-- Primeira seção --}}

    <div class="section" id="section1" data-anchor="firstPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4 push-lg-3 push-xl-4 objetos-centro-centro">
                <h2 class="animated-texto-1 bounceInRight">SITE DELIVERY</h2>

                <h5 class="animated-texto-2 bounceInRight">Impulsione os seus negócios com tecnologia de ponta.</h5>

                <p class="animated-texto-3 bounceInRight">Desenvolver sites responsivos que se adaptam aos mais diferentes dispositivos não é mais uma opção, é uma necessidade. Isso porque o seu cliente deseja tudo o que você tem a oferecer na palma das mãos, a apenas um clique de distância.</p>

                <p class="animated-texto-3 bounceInRight">Pensando nisso, criamos <strong>sites delivery</strong> modernos, adaptáveis, com <strong>navegação</strong> intuitiva e que podem inclusive trabalhar com total <strong>integração e sintonia com o aplicativo</strong> de pedidos da sua empresa. E ainda tem mais, oferecemos uma tecnologia inédita para o gerenciamento e atualização de conteúdos.</p>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-image" aria-hidden="true"></i> Galeria</a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-image" aria-hidden="true"></i></a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="hidden-md-down col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_3">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/laptop2.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_4">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/iphone2.png')}}"/>
            </div>

            <div class="objetos-rodape col-12 row mt-4">

                <div class="text-center animated-icon-1 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Atualizações dos produtos</p>
                </div>


                <div class="text-center animated-icon-3 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Taxas de entrega</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-tasks fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Controle de fila de pedidos</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-print fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Sistema de impressão de pedidos</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Cadastro de clientes</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-laptop fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Acompanhamento dos pedidos</p>
                </div>

            </div>

        </div>

    </div>

    {{-- Segunda seção --}}

    <div class="section" id="section2" data-anchor="secondPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4 push-lg-3 push-xl-4 objetos-centro-centro">
                <h2 class="animated-texto-1 bounceInRight">E-COMMERCE</h2>

                <h5 class="animated-texto-2 bounceInRight">A sua porta de entrada virtual para bons negócios.</h5>

                <p class="animated-texto-3 bounceInRight">Levar a sua empresa para o ambiente virtual é sinônimo de abrir as portas dela para um mercado sem limites. Para ajudar você nessa tarefa, desenvolvemos plataformas incríveis, inovadoras, personalizadas e com a mais alta tecnologia orientada para <strong>alavancar as suas vendas e a sua exposição virtual</strong>.</p>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-image" aria-hidden="true"></i> Galeria</a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-image" aria-hidden="true"></i></a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="hidden-md-down col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_3">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/tablet.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_4">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/notebook.png')}}"/>
            </div>

            <div class="objetos-rodape col-12 row mt-4">

                <div class="text-center animated-icon-1 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Atualizações dos produtos</p>
                </div>


                <div class="text-center animated-icon-3 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-truck fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Taxas de entrega</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-tags fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Alterações de valores</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-laptop fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Acompanhamento das compras</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Cadastro de clientes</p>
                </div>

                <div class="text-center animated-icon-4 fadeInUp col-4 col-md-4 col-lg-2">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Carrinho de compras</p>
                </div>

            </div>

        </div>

    </div>

    {{-- Terceira seção --}}

    <div class="section" id="section3" data-anchor="thirdPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4 push-lg-3 push-xl-4 objetos-centro-centro">
                <h2 class="animated-texto-1 bounceInRight">SITE INSTITUCIONAL</h2>

                <h5 class="animated-texto-2 bounceInRight">Sua marca vista e lembrada no ambiente virtual.</h5>

                <p class="animated-texto-3 bounceInRight">Marcar presença na rede de um jeito estratégico, eficiente e seguro é fundamental. Por isso, desenvolvemos <strong>sites institucionais</strong> aliando o nosso know-how às melhores <strong>ferramentas da web</strong> para que a sua empresa conquiste o mercado e seja reconhecida de verdade.</p>

                <p class="animated-texto-3 bounceInRight">Através de tecnologias inéditas, oferecemos plataformas dinâmicas com um <strong>sistema administrativo* exclusivo</strong> e totalmente preparado para a atualização de conteúdos institucionais. Além disso, pensando na melhor experiência do usuário, criamos sites responsivos que se adaptam a qualquer tipo de tela e dispositivo.</p>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-image" aria-hidden="true"></i> Galeria</a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-image" aria-hidden="true"></i></a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_1">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/macbook.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_2">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/smart.png')}}"/>
            </div>


        </div>

    </div>



</div>

@endsection
