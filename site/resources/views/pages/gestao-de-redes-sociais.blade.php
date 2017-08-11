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
                <h2 class="animated-texto-1 bounceInRight">GESTÃO DE REDES SOCIAIS</h2>

                <h5 class="animated-texto-2 bounceInRight">Sua marca onde ela deve estar</h5>

                <p class="animated-texto-3 bounceInRight">As <strong>redes sociais</strong> são o “boom” da vez, sem dúvidas. Não só por terem revolucionado a forma como as empresas e pessoas se relacionam, mas também por serem veículos geradores de tendências, conteúdo e opinião. Sendo assim, marcar presença lá é fundamental. E disso, nós entendemos muito bem!</p>

                <p class="animated-texto-3 bounceInRight">A <strong>Agência ECOS</strong> expõe sua marca, seus produtos e serviços de forma inovadora, criativa e envolvente, falando a língua do seu <strong>público-alvo</strong>. Criamos postagens exclusivas, de alta qualidade e com a cara da sua empresa. Tudo isso pensando de forma estratégica para que a sua marca faça a diferença dentro das redes sociais.</p>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-image" aria-hidden="true"></i> Galeria</a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="delivery.html" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-image" aria-hidden="true"></i></a>
                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_1">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/pc-facebook.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_2">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/instagram.png')}}"/>
            </div>

        </div>

    </div>

</div>

@endsection
