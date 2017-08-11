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

<div id="fullPageSinglePage">

    <div class="section" id="section0" data-anchor="firstPage">

        <div class="px-4 objetos-centro row">

            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4 push-lg-3 push-xl-4 objetos-centro-centro">
                <h2 class="animated-texto-1 bounceInRight">BRANDING</h2>

                <h5 class="animated-texto-2 bounceInRight">Criatividade, do planejamento à execução</h5>

                <p class="animated-texto-3 bounceInRight">Somos apaixonados por marcas e queremos ajudar a contar uma história de sucesso para o seu <strong>negócio</strong>.  Afinal, todo o nosso trabalho é desenvolvido com a intenção de tornar a sua empresa <strong>conhecida, desejada</strong> e mais <strong>positiva</strong> na mente e, principalmente, no coração dos seus consumidores.</p>

                <p class="animated-texto-3 bounceInRight">Assim, criamos <strong>estratégias inteligentes</strong> para realizar e potencializar o encontro entre a sua marca, as pessoas e resultados. E isso envolve tudo o que diz respeito à <strong>comunicação</strong> da sua empresa.</p>


                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_2">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/marca.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_1">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/ecos.png')}}"/>
            </div>

        </div>

    </div>

</div>

@endsection
