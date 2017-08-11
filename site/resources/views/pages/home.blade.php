@extends('base')
@section('content')

@component('navbar')
    @slot('activeHome')
        active
    @endslot
    @slot('activeSobre')
        inactive
    @endslot
    @slot('activeHistorias')
        inactive
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
<header>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">

			<div class="carousel-item active" style="background-image: url('img/bannerevento.png')">
			</div>

			<div class="carousel-item" style="background-image: url('img/intro-slide-bg-1.jpg')">
			</div>

			<div class="carousel-item" style="background-image: url('img/intro-slide-bg-2.jpg')">

			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>
@endsection