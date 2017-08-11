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
active
@endslot
@slot('activeServicos')
inactive
@endslot
@slot('activeBlog')
inactive
@endslot
@slot('activeContato')
inactive
@endslot
@endcomponent
<div class="container" id="cases">

    <!-- Page Heading -->
    <h1 class="my-4">Histórias de Sucesso <small>Conheça as principais campanhas de nossa agência</small></h1>

    <div class="row">

        @foreach($items as $item)
        <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item sr-ecos">
            <div class="card h-100">
                <a href="{{url('cases/'.$item->slug)}}"><div class="div-img"><img class="card-img-top img-fluid" src="{{$item->imagem}}" alt=""></div></a>
                <div class="card-block">
                    <h4 class="card-title text-uppercase"><a class="link-underline" href="{{url('cases/'.$item->slug)}}">{{$item->titulo}}</a></h4>
                    <p class="card-text">{{$item->descricao}}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>


    <!-- /.row -->

</div>

@component('footer')
@endcomponent

@endsection