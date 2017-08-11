<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/lightgallery.css')}}">
<link rel="stylesheet" type="text/css" href="{{mix('css/bootstrap.css')}}">


@if (Request::is('servicos/*'))
	@stack('styles')

@endif


<style>
	/*.navbar-toggler {
		z-index: 1;
	}

	@media (max-width: 576px) {
		nav > .container {
			width: 100%;
		}
	}*/

	.carousel-item.active,
	.carousel-item-next,
	.carousel-item-prev {
		display: block;
	}
</style>