@extends('base')
@section('content')

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
<div class="container" id="services">

    <h1 class="my-4">Serviços <small>Conheça tudo o que a ECOS pode fazer por você</small></h1>

    <div class="row cta">
        <div class="col-4">
            <img class="img-max" src="img/cta-book.png">
        </div>
        <div class="col-8">
            <h3>Conheça o que a <strong>ECOS</strong> pode lhe oferecer.</h3>
            <h5>Baixe agora mesmo o catálogo de serviços da <strong>ECOS</strong>.</h5>
            <a href="https://doc-0g-98-docs.googleusercontent.com/docs/securesc/r77p73bkmioaaisthmlli7fe06q7q1kv/0od16826frqdldqmou06r2qks6r2vlk7/1496944800000/03611443801453314385/02740423277474358999/0B9uMHjPfSUbDUlBYdFZPZUE0dE0?e=download&nonce=s67grjkhp1gnu&user=02740423277474358999&hash=l1ibbcohvul68nem6ac56j6i8nc5chnn" target="_blank" class="btn btn-cta" download="catecos">Download</a>
        </div>
    </div>

    <div class="row">
    @foreach($items as $item)
        <div class="col-6 col-md-4 portfolio-item sr-ecos">
            <div class="card h-100">
                <a href="{{url('servicos/'.$item->slug)}}"><div class="div-img"><img class="card-img-top img-fluid" id="testeimg" src="{{URL::asset($item->imagem)}}" alt="{{$item->titulo}}"></div>
                    <div class="card-block">
                        <h4 class="card-title text-uppercase">{{$item->titulo}}</h4>
                        <p class="card-text">{{$item->descricao}}</p>
                    </div>
                </a>
            </div>
        </div>
       @endforeach
         

    </div>
</div>

@component('footer')
@endcomponent

@endsection