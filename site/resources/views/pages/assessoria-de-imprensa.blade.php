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
                <h2 class="animated-texto-1 bounceInRight">ASSESSORIA DE IMPRENSA</h2>

                <h5 class="animated-texto-2 bounceInRight">Sua empresa em destaque na mídia</h5>

                <p class="animated-texto-3 bounceInRight">Onde a sua marca precisa ou gostaria de ser vista? Aqui na <strong>ECOS</strong> trabalhamos dia e noite para conquistar <strong>espaço e credibilidade</strong> para a sua empresa. Colocamos a mão na massa para fazer a ponte entre o seu negócio e os <strong>meios de comunicação</strong> através de notícias, artigos, notas, reportagens e matérias de interesse.</p>

                <p class="animated-texto-3 bounceInRight">Por meio de uma assessoria de imprensa estratégica, podemos ajudar a sua empresa a aparecer mais na mídia, fortalecendo a sua imagem e o posicionamento dela no mercado.</p>

                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-large"><i class="fa fa-dollar" aria-hidden="true"></i> Solicite um orçamento</a>

                <a href="" class="btn btn-secondary fadeInUp animated-texto-3 button-icon"><i class="fa fa-dollar" aria-hidden="true"></i></a>
            </div>


            <div class="hidden-md-down col-12 col-lg-3 col-xl-4 pull-lg-6 pull-xl-4" id="imagem_3">
                <img class="max-x animated-smartphone rotateInUpRight" src="{{URL::asset('img/servicos/microphone.png')}}"/>
            </div>

            <div class="hidden-sm-down col-md-4 col-lg-3 col-xl-4 objeto-centro-direito" id="imagem_4">
                <img class="max-x animated-smartphone-2 rotateInUpLeft" src="{{URL::asset('img/servicos/video.png')}}"/>
            </div>

            <div class="objetos-rodape col-12 row mt-4">
            <div class="text-center animated-icon-1 fadeInUp col-6 col-md-3">
                    <i class="fa fa-bullhorn fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Estratégias de comunicação</p>
                </div>
                <div class="text-center animated-icon-2 fadeInUp col-6 col-md-3">
                    <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Acompanhamento de entrevista</p>
                </div>
                <div class="text-center animated-icon-3 fadeInUp col-6 col-md-3">
                    <i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Press Release</p>
                </div>
                <div class="text-center animated-icon-4 fadeInUp col-6 col-md-3">
                    <i class="fa fa-id-card fa-2x" aria-hidden="true"></i>
                    <p class="text-center">Follow up</p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
