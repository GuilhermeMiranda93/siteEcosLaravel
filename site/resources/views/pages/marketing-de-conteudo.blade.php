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
                <h2 class="animated-texto-1 bounceInRight">MARKETING DE CONTEÚDO</h2>

                <h5 class="animated-texto-2 bounceInRight">Visibilidade e conteúdo inteligente para quem espera resultados</h5>

                <p class="animated-texto-3 bounceInRight"><strong>Conteúdo</strong> é a palavra da vez para qualquer coisa quando o assunto é <strong>comunicação</strong>. Os consumidores de informação estão cada vez mais exigentes, o que só pode significar uma coisa... o blá, blá, blá das empresas está com os dias contados, deixando de ser eficiente.</p>

                <p class="animated-texto-3 bounceInRight">O <strong>Marketing de Conteúdo</strong> realizado pela <strong>ECOS</strong> é uma forma estratégica de engajar o público-alvo da sua marca, ajudando a aumentar a sua rede de clientes e potenciais clientes através da produção de <strong>conteúdo de interesse</strong>, de modo a atrair, envolver e valorizar a sua empresa, criando uma percepção positiva sobre o seu negócio.</p>

                <p class="animated-texto-3 bounceInRight">Além disso, atuamos de maneira integrada em todas as <strong>etapas do processo de vendas</strong>, de ponta a ponta, inclusive na <strong>nutrição e qualificação de leads</strong>. Afinal, os resultados de verdade só aparecem quando o contato com o cliente é feito a partir de uma abordagem profissional, objetiva, estratégica e inteligente. </p>

                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_1">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/megafone.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_2">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/chat.png')}}"/>
            </div>

        </div>

    </div>

</div>

@endsection
