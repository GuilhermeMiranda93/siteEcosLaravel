@extends('base')
@section('content')

@component('navbar')
@slot('activeHome')
inactive
@endslot
@slot('activeSobre')
active
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

<div class="first-content">
    <div class="banner row"></div>
    <div class="col-xs-12 col-sm-8 col-md-4 block text-center">
        <h1>Agência ECOS</h1>
        <h1><span>Exposição e Comunicação</span></h1>
    </div>

    <!-- Introduction ECOS -->
    <div class="row background-text justify-content-center">
        <div class="col-12 col-lg-10">
            <p>Somos a <strong>ECOS</strong>, uma agência jovem, antenada e que faz uso dos mais avançados recursos tecnológicos disponíveis por aí. Os anos que temos de estrada já trouxeram para a nossa bagagem grandes experiências. Aliás, experiências estas que queremos compartilhar com você e aplicar no dia a dia da sua empresa.</p>
            <p>Na prática, trabalhamos a <b>comunicação e exposição</b> com todos os recursos e potenciais da <strong>propaganda e marketing</strong>, buscando sempre criar soluções que valorizem a marca e o posicionamento mercadológico dos nossos clientes. Com isso, o nosso grande diferencial é uma combinação de know-how e <strong>criatividade</strong> aliados à <strong>alta tecnologia</strong>, levando marcas de maneira eficiente e em tempo real até as mãos do público-alvo.</p>
        </div>
    </div>

    <div class="container estrutura-div">
        <!-- Introduction Estrutura -->
        <div class="img-max text-center">
            <img src="img/ecos-2.png" class="img-estrutura"/>
        </div>
        <div class="estrutura">
            <h1 class="my-4"><span>Mais de 750m²</span> de muita criatividade!</h1>
            <p>Quem conhece o nosso espaço, sabe exatamente do que estamos falando. A <strong>ECOS</strong> tem uma estrutura ampla, charmosa e incrível que conta com <strong>estúdios de fotografia, filmagem e áudio</strong>, equipados com o que há de mais moderno no mercado. Com isso, somos capazes de apresentar soluções rápidas, adequadas e totalmente completas às necessidades de comunicação de todos os nossos clientes.</p>
        </div>
    </div>
</div>

<div class="container">        
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4 text-left"><span>Nossa</span> Galeria</h1>
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria1.jpg" data-src="img/galeria1.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria1.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria2.jpg" data-src="img/galeria2.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria3.jpg" data-src="img/galeria3.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria3.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria4.jpg" data-src="img/galeria4.jpg">
                        <a href="img/galeria.jpg">
                            <img class="img-responsive" src="img/galeria4.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria5.jpg" data-src="img/galeria5.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria5.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria9.jpg" data-src="img/galeria9.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria9.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria7.jpg" data-src="img/galeria7.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria7.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-3 col-md-3" data-responsive="img/galeria10.jpg" data-src="img/galeria10.jpg">
                        <a href="">
                            <img class="img-responsive" src="img/galeria10.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container second-content">
    <!-- Introduction SOITIC -->
    <div class="row">
        <div class="col-md-5 col-lg-3">
            <img src="img/engrenagem.png" class="img-max"/>
        </div>  
        <div class="col-md-7 col-lg-9 align-center">
            <h1 class="my-4 text-left"><span>Uma empresa do</span> Grupo SOITIC</h1>
            <p>A <strong>ECOS – Exposição e Comunicação</strong> é uma das engrenagens do <a href="soitic.com.br" target="_blank">Grupo SOITIC</a>, um conjunto de empresas que há décadas leva soluções inteligentes com agilidade e precisão às necessidades do mercado brasileiro e internacional. Com o propósito de transformar, com responsabilidade e inteligência, tecnologias em avançados meios que propiciam evolução a todos, o grupo faz uso dos mais novos recursos da <strong>Tecnologia da Informação e Comunicação (TIC)</strong>.</p>
        </div>
    </div>

    <!-- Team Members Row -->
    <div class="row divider team-members">
        <div class="col-lg-12">
            <h1 class="text-center mb-4">Nossa <span>Equipe</span></h1>
        </div>


        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Dr_Agnaldo.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>DR. AGNALDO <strong>VIANA</strong></h3>
                <p>Presidente do Grupo SOITIC</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Pedro.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>PEDRO <strong>MIGOTI</strong></h3>
                <p>Coordenador Geral</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Arison.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>ARISON <strong>DANZIGER</strong></h3>
                <p>Diretor Comercial</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Evelyn.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>EVELYN <strong>THOMAZ</strong></h3>
                <p>Coordenadora de Produção</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Renato.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>RENATO <strong>AGUIAR</strong></h3>
                <p>Coordenador de Conteúdo</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Alexandre.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>ALEXANDRE <strong>SOUZA</strong></h3>
                <p>Coordenador de Projetos Web</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/phamela.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>PHAMELA <strong>KARLA</strong></h3>
                <p>Atendimento Publicitário</p>
            </div>
        </div>      

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/thais.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>THAIS <strong>NASTRINI</strong></h3>
                <p>Atendimento Publicitário</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/guilherme.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>JOÃO <strong>GUILHERME</strong></h3>
                <p>Consultor Comercial</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Oswaldo.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>OSWALDO <strong>TEZOLIN</strong></h3>
                <p>Consultor Comercial</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Izabela.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>IZABELA <strong>MORAES</strong></h3>
                <p>Nutricionista</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/pedro2.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>PEDRO <strong>GUILHERME</strong></h3>
                <p>Diretor de Manutenção Laboral</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/scassiotti.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>RODRIGO <strong>SCASSIOTTI</strong></h3>
                <p>Diretor Fiscal e Contábil</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Claudineia.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>CLAUDINEIA <strong>ANDRADE</strong></h3>
                <p>Diretora do Departamento Pessoal</p>
            </div>
        </div>

        <div class="col-md-4 row divider-minor">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Erica.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>ERICA <strong>FERREIRA</strong></h3>
                <p>Diretora RH</p>
            </div>
        </div>

        <div class="col-md-4 row divider">
            <div class="col-md-4">
                <img class="img-fluid" src="img/equipe/Andriele.jpg"/>
            </div>
            <div class="col-md-8 texto-equipe">
                <h3>ANDRIELE <strong>BATISTÃO</strong></h3>
                <p>Diretora Administrativo</p>
            </div>
        </div>

        <div class="col-md-12 equipe-texto">
            <h5>Hoje, internamente, são mais de 30 integrantes envolvidos na <strong>Agência ECOS</strong>. Um time completo que vai desde o pessoal da produção, atendimentos, criação, administrativo a até mesmo o professor de ginástica laboral e nutrição.</h5>
        </div>

    </div>

</div>

@component('footer')
@endcomponent

@endsection