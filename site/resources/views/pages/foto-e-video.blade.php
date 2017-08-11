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
    <a class="btn btn-secondary" href="#firstPage">DRONE</a>
    <a class="btn btn-secondary" href="#secondPage">ANIMAÇÂO</a>
</div>

<div class="arrow arrow-down mb-4 mr-4">
    <a href="#" id="arrowDown"><i class="fa fa-arrow-down"></i></a>
</div>

<div class="arrow arrow-up mb-4 mr-4">
    <a href="#" id="arrowUp"><i class="fa fa-arrow-up"></i></a>
</div>

<div id="fullPageMultPage2">

    {{-- Pré seção --}}

    <div class="section fp-tableCell-home" id="section0" data-anchor="zeroPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 objetos-centro-centro">
                <h2 class="text-center animated-texto-1 bounceInRight">FOTO E VÍDEO</h2>

                <h5 class="text-center animated-texto-2 bounceInRight">Imagens que contam histórias sobre o seu negócio</h5>

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
                <h2 class="animated-texto-1 bounceInRight">DRONE</h2>

                <h5 class="animated-texto-2 bounceInRight">Registre momentos inesquecíveis com outro ponto de vista.</h5>

                <p class="animated-texto-3 bounceInRight">Quer ver a sua empresa em uma <strong>perspectiva</strong> completamente diferente? Para nós, isso não é problema. Utilizamos toda a nossa experiência para registrar imagens de diferentes ângulos, de um jeito que você nunca imaginou, valorizando a sua <strong>marca</strong> e aumentando assim a visibilidade da sua empresa de maneira <strong>criativa e exclusiva</strong>.</p>


                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-image" aria-hidden="true"></i> Galeria</a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-image" aria-hidden="true"></i></a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_1">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/drone.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_2">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/drone-control.png')}}"/>
            </div>

        </div>

    </div>

    {{-- Segunda seção --}}

    <div class="section" id="section2" data-anchor="secondPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4 push-lg-3 push-xl-4 objetos-centro-centro">
                <h2 class="animated-texto-1 bounceInRight">ANIMAÇÃO</h2>

                <h5 class="animated-texto-2 bounceInRight">Dando vida à imagens 3D.</h5>

                <p class="animated-texto-3 bounceInRight"><strong>Criatividade</strong> também é isso: utilizar todos os recursos disponíveis para sua marca subir de posição na mente do seu público. Por isso, produzimos <strong>animações</strong> como uma forma lúdica e dinâmica de dar uma nova cara à sua marca, passando a mensagem pretendida de um jeito mais atraente e gerando resultados que, provavelmente, outras técnicas não alcançariam.</p>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-image" aria-hidden="true"></i> Galeria</a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-image" aria-hidden="true"></i></a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_1">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/game.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_2">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/foguete.png')}}"/>
            </div>

        </div>

    </div>




</div>

@endsection
