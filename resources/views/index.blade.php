@extends('layouts.app')
@section('content') 
 
 <!--Inicio Slide-->
    <div id="Inicio">
        <div class="container-narrow">
            <div id="carouselSite" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselSite" data-slide-to="1"></li>
                    <li data-target="#carouselSite" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-responsive d-block w-100" src="imagens/banner.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="imagens/Produtos/banner01.jpg" class="rounded-circle img-responsive col-5" style="margin-bottom: -210px; margin-left: 650px; width: 400px;">
                            <div class="col-8 text-justify">
                                <h1>Controlador
                                    de Acesso</h1>
                                <p>O Controlador de Acesso – MD 5705 é um
                                    equipamento
                                    prático e moderno
                                    para o
                                    controle de acesso através
                                    de comparação e identificação do padrão de impressões digitais. Pode ser utilizado
                                    em
                                    empresas de pequeno a grande
                                    porte. Controla a abertura de portas, catracas ou torniquetes, controlando o acesso
                                    através de um processo
                                    completamente a prova de fraudes.</p>
                                <a href="#" class="btn btn-outline-light mr-3">Saiba mais</a>
                                <a href="#" class="btn btn-outline-light">Compre já</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-responsive img-fluid d-block w-100" src="imagens/banner.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="carousel-caption d-none d-md-block">
                                <img src="imagens/Produtos/banner02.png" width="200px" class="rounded-circle img-responsive col-5"
                                    style="margin-bottom: -100px; margin-left: 650px; width: 700px;">
                                <div class="col-8 text-justify">
                                    <h1>Catraca RBC 5905 </h1>
                                    <p>A Catraca de Inox RBC 5905 é a melhor opção para o controle de acesso de sua
                                        empresa. A Catraca RBC 5905 possui
                                        eficiente leitura de impressão de digitais.</p>
                                    <a href="{{route('produtoCatraca')}}" class="btn btn-outline-light mr-3">Saiba mais</a>
                                    <a href="{{route('catraca')}}" class="btn btn-outline-light">Compre já</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                            <img class="img-responsive img-fluid d-block w-100" src="imagens/banner.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="carousel-caption d-none d-md-block">
                                    <img src="imagens/Produtos/banner02.png" width="200px" class="rounded-circle img-responsive col-5"
                                        style="margin-bottom: -100px; margin-left: 650px; width: 700px;">
                                    <div class="col-8 text-justify">
                                        <h1>Catraca RBC 5905 </h1>
                                        <p>A Catraca de Inox RBC 5905 é a melhor opção para o controle de acesso de sua
                                            empresa. A Catraca RBC 5905 possui
                                            eficiente leitura de impressão de digitais.</p>
                                        <a href="{{route('produtoCatraca')}}" class="btn btn-outline-light mr-3">Saiba mais</a>
                                        <a href="{{route('catraca')}}" class="btn btn-outline-light">Compre já</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Avançar</span>
                </a>
            </div>
        </div>
        <div id="Produtos"></div>
    </div>
    <!--Fim Slide-->
    <!--Produtos-->
    <div class="container">
    <h1 class="display-3 text-center my-5">Produtos</h1>
            <div class="card-deck">
                <div class="card">
                    <img class="img-responsive card-img-top" src="imagens/100-salgados-fritos-para-festa.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">MD REP EVO</h5>
                        <p class="card-subtitle text-muted my-3">Madis MD REP REVO é o relógio perfeito para quem quer a segurança dos dados
                            de registro dos funcionários. Além disso, possui sistema próprio em nuvem para tratamento de pontos.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Comprar R$ 2.000,00</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Relógio top</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-responsive card-img-top" src="imagens/esfirra-aberta-de-carne-para-diabeticos.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Inner Rep Plus</h5>
                        <p class="card-subtitle mb-2 text-muted my-3">Uma das melhores marcas no mercado, a TopData lançou 
                            seu mais novo equipamento: Inner Rep Plus, com módulo biomérico com agilidade de gravação e registro de ponto.
                        </output></p>
                        <a href="#" class="btn btn-outline-primary">Comprar R$ 2.000,00</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">A melhor biometria</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-responsive card-img-top my-auto" src="imagens/quibe-de-bacalhau.jpg " alt="">
                    <div class="card-body">
                        <h5 class="card-title">iPointline</h5>
                        <p class="card-subtitle mb-2 text-muted my-3">A RW Tech vem sempre inovando em seus aparelhos.
                            O iPointline possui certificado INMETRO e oferece um sistema próprio de tratamento de pontos integrado
                            em nuvem.
                        </p>
                        <a href="#" class="btn btn-outline-primary">Comprar R$ 2.000,00</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Topissimo</small>
                    </div>
                </div>
            </div>
        </div>
        <div align="center" class="container">
            <a href="#" class="btn btn-outline-primary my-4">Mais produtos</a>
        </div>
    
    <!--Fim Produtos-->
    <div class="container">
        <div class="col-12 mb-3">
            <hr>
        </div>
        <h1 class="display-3 text-center my-5">Seja Bem Vindo(a)!</h1>
        <p class="text-center lead">Apresentamos o nosso site. Totalmente interativo, moderno e de fácil navegação.
            Tem
            como
            objetivo mostrar a diversidade
            dos produtos e serviços oferecidos, nele, você também poderá solicitar orçamentos on-line. Sem dúvida é
            um
            canal que nos aproxima dos nossos atuais e futuros clientes. Aproveite. </p>

        </p>
    </div>
    <div class="container">
        <div class="col-12 mb-3">
            <hr>
        </div>
        <h1 class="display-3 text-center my-5">A empresa MIXCOM</h1>
        <p class="text-center lead">A Mixcom é uma empresa voltada para soluções de Ponto e Acesso, além de Softwares,
            somos Assistência
            Técnica Especializada e oferecemos Manutenção de Equipamentos, objetivando entender para atender
            a necessidade dos nossos clientes/parceiros através da venda consultiva, atuando com excelência
            e qualidade na prestação do serviço, conquistando assim, a satisfação dos seus clientes com dedicação
            e comprometimento.
        </p>
    </div>
    <div class="scrollup ">
        <a href="# ">
            <i class="icon-up-open"></i>
        </a>
    </div>
@endsection
