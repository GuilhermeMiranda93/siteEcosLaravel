<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{URL::asset('img/ecos-logo.png')}}" style="height:40px;" alt="logo ecos"></a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{$activeHome}}">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item {{$activeSobre}}">
                    <a class="nav-link" href="{{url('/aecos')}}">A ECOS</a>
                </li>
                <li class="nav-item {{$activeHistorias}}">
                    <a class="nav-link" href="{{url('/cases')}}">Histórias de Sucesso</a>
                </li>
                <li class="nav-item {{$activeServicos}}">
                    <a class="nav-link" href="{{url('/servicos')}}">Serviços</a>
                </li>
                <li class="nav-item {{$activeBlog}}">
                    <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                </li>                    
                <li class="nav-item {{$activeContato}}">
                    <a class="nav-link" href="{{url('/contato')}}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://vip-medsystem.com.br/login.aspx" target="_blank">Espaço VIP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>