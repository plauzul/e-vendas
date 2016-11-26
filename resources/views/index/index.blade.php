<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Vendas</title>

        <!-- Styles -->
        <link href="css/plugins/bootstrap.min.css" rel="stylesheet">
        <link href="css/plugins/font-awesome.min.css" rel="stylesheet">
        <link href="css/plugins/prettyPhoto.css" rel="stylesheet">
        <link href="css/plugins/price-range.css" rel="stylesheet">
        <link href="css/plugins/animate.css" rel="stylesheet">
        <link href="css/plugins/main.css" rel="stylesheet">
        <link href="css/plugins/responsive.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Icon -->
        <link rel="icon" href="images/favicon.png">

    </head>
    <body>

        <header id="header">
            <div class="header_top"><!--header_topo-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a><i class="fa fa-phone"></i> 61 98877-9988</a></li>
                                    <li><a><i class="fa fa-envelope"></i> evendasofficial@evendas.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_topo-->
            
            <div class="header-middle"><!--header-meio-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a class="load" href="" data-href="{{ url('home') }}" data-content=".box-content" data-img-load="#img-load"><img src="images/logo.png" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-user"></i> Conta</a></li>
                                    <li><a href="#"><i class="fa fa-star"></i> Favoritos</a></li>
                                    <li><a href="#"><i class="fa fa-crosshairs"></i> Confira</a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#modal-login"><i class="fa fa-lock"></i> Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-meio-->
        
            <div class="header-bottom"><!--header-botão-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Alternar Navegação</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a class="load" href="" data-href="{{ url('home') }}" data-content=".box-content" data-img-load="#img-load">Inicio</a></li>
                                    <li class="dropdown"><a href="#">Loja<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="#">Produtos</a></li>
                                            <li><a href="#">Detalhes do Produto</a></li> 
                                            <li><a href="#">Confira</a></li> 
                                            <li><a href="#">Carrinho</a></li> 
                                            <li><a href="#">Login</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a class="load" href="" data-href="{{ url('blog') }}" data-content=".box-content" data-img-load="#img-load">Blog</a></li> 
                                    <li><a class="load" href="" data-href="{{ url('moda-do-momento') }}" data-content=".box-content" data-img-load="#img-load">Moda do Momento</a></li>
                                    <li><a class="load" href="" data-href="{{ url('contatos') }}" data-content=".box-content" data-img-load="#img-load">Contatos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Procurar" />
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-botão-->
        </header>

        <nav class="navbar navbar-default navbar-fixed-top" id="menu">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/logo.png" width="50"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a class="load" href="" data-href="{{ url('home') }}" data-content=".box-content" data-img-load="#img-load">Inicio <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loja <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Produtos</a></li>
                            <li><a href="#">Detalhes do Produto</a></li>
                            <li><a href="#">Confira</a></li>
                            <li><a href="#">Carrinho</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </li>
                    <li><a class="load" href="" data-href="{{ url('blog') }}" data-content=".box-content" data-img-load="#img-load">Blog</a></li>
                    <li><a class="load" href="" data-href="{{ url('moda-do-momento') }}" data-content=".box-content" data-img-load="#img-load">Moda do Momento</a></li>
                    <li><a class="load" href="" data-href="{{ url('contatos') }}" data-content=".box-content" data-img-load="#img-load">Contatos</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-user"></i> Conta</a></li>
                    <li><a href="#"><i class="fa fa-star"></i> Favoritos</a></li>
                    <li><a href="#"><i class="fa fa-crosshairs"></i> Confira</a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modal-login"><i class="fa fa-lock"></i> Login</a></li>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Procurar" id="search-product" />
                            </div>
                        </div>
                    </form>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Modal Login -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Faça Login</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" />
                            </div>
                            <button class="btn btn-block btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <img src="images/load-img.gif" class="center-block img-responsive hidden" id="img-load">
        <section class="box-content">
            <div class="load-go" data-href="{{url('home')}}" data-img-load="#img-load"></div>
        </section>

        <footer id="footer">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Serviços</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Ajuda Online</a></li>
                                    <li><a href="#">Entre Em Contato Conosco</a></li>
                                    <li><a href="#">Status do Pedido</a></li>
                                    <li><a href="#">Mudar Localização</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Acesso Rápido</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Camiseta</a></li>
                                    <li><a href="#">Homens</a></li>
                                    <li><a href="#">Mulheres</a></li>
                                    <li><a href="#">Cartões de Presente</a></li>
                                    <li><a href="#">Sapatos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Políticas</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Termos de Uso</a></li>
                                    <li><a href="#">Política de Privacidade</a></li>
                                    <li><a href="#">Politica de Reembolso</a></li>
                                    <li><a href="#">Sistema de Cobrança</a></li>
                                    <li><a href="#">Sistema de Bilheteira</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Sobre o E-vendas</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Informação da Empresa</a></li>
                                    <li><a href="#">Carreiras</a></li>
                                    <li><a href="#">Local da loja</a></li>
                                    <li><a href="#">Copyright</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="single-widget">
                                <h2>Assine nossa Newsletter</h2>
                                <form action="#" class="searchform">
                                    <input type="text" placeholder="Seu Endereço de E-Mail" />
                                    <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                    <p>É Obtenha As Atualizaçoes <br />Mais Recentes Do Nosso Site...</p>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>            
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left"> <CENTER>Copyright © 2016 E-Vendas Inc. All rights reserved.</CENTER></p>
                    </div>
                </div>
            </div>            
        </footer>

        <script src="js/plugins/jquery.js"></script>
        <script src="js/plugins/bootstrap.min.js"></script>
        <script src="js/plugins/jquery.scrollUp.min.js"></script>
        <script src="js/plugins/price-range.js"></script>
        <script src="js/plugins/jquery.prettyPhoto.js"></script>
        <script src="js/plugins/main.js"></script>
        <script src="js/plugins/ajaxPages.js"></script>
        <script src="js/script.js"></script>

    </body>
</html>
