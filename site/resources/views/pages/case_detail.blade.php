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
<div class="container" id="case_detail">

    <h1 class="my-4 text-center">{{$items->titulo}} <small> </small></h1>
    <!-- Portfolio Item Row -->
    <div class="row">

        {!! $items->texto !!}

    </div>

    <!-- Related Projects Row -->
    <h3 class="my-4">Trabalhos realizados</h3>

    <div class="row">

        @foreach($fotos as $foto)
        <div class="col-md-3 col-sm-6 mb-4">
        <a href="{{URL::asset($foto->imagem)}}" data-lightbox="gallery">
                <img class="img-fluid" src="{{URL::asset($foto->imagem)}}" alt="{{$foto->titulo}}">
            </a>
        </div>
        @endforeach




    </div>



</div>

@component('footer')
@endcomponent

@endsection