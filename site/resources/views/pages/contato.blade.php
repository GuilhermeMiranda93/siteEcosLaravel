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
inactive
@endslot
@slot('activeBlog')
inactive
@endslot
@slot('activeContato')
active
@endslot
@endcomponent

<div class="container">

	<div class="row">

		<div class="col-12">

			<h1 class="my-4 text-left"><span>Fale</span> Conosco</h1>

		</div>

	</div>

	<div class="row formulario-contato-div">

		<form class="formulario-contato">

			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">E-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">Nós não utilizaremos o seu e-mail para enviar spam.</small>
			</div>
			<div class="form-group">
				<label for="exampleTextarea">Mensagem</label>
				<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
			</div>

			<button type="submit" class="btn btn-ecos">Enviar</button>
		</form>

	</div>

</div>

@component('footer')
@endcomponent

@endsection