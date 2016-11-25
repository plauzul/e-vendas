<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Styles -->
        <link href="css/plugins/bootstrap.min.css" rel="stylesheet">
        <link href="css/plugins/font-awesome.min.css" rel="stylesheet">
        <link href="css/plugins/prettyPhoto.css" rel="stylesheet">
        <link href="css/plugins/price-range.css" rel="stylesheet">
        <link href="css/plugins/animate.css" rel="stylesheet">
        <link href="css/plugins/main.css" rel="stylesheet">
        <link href="css/plugins/responsive.css" rel="stylesheet">

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
                                    <li><a href="#"><i class="fa fa-phone"></i> 61 988779988</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> EvendasOfficial@evendas.com</a></li>
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
                                <a href="index.html"><img src="images/logo.png" /></a>
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
                                    <li><a href="<?php echo e(url('/')); ?>" class="active">Inicio</a></li>
                                    <li class="dropdown"><a href="#">Loja<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="#">Produtos</a></li>
                                            <li><a href="#">Detalhes do Produto</a></li> 
                                            <li><a href="#">Confira</a></li> 
                                            <li><a href="#">Carrinho</a></li> 
                                            <li><a href="#">Login</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a class="load" href="" data-href="<?php echo e(url('blog')); ?>" data-content=".box-content" data-img-load="#img-load">Blog</a>
                                    </li> 
                                    <li><a href="#">Moda do Momento</a></li>
                                    <li><a href="#">Contatos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Procurar"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-botão-->
        </header>

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
            <section id="slider">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-carousel" data-slide-to="1"></li>
                                    <li data-target="#slider-carousel" data-slide-to="2"></li>
                                </ol>
                                
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-sm-6">
                                            <h1><span>E</span>-Vendas</h1>
                                            <h2>As Melhores Modas do Momento</h2>
                                            <p>Escolha a moda que mais combine com você é seja feliz comprando o que á de melhor para você e com os melhores preços do mercado! </p>
                                            <button type="button" class="btn btn-default get">Click e Confira</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="images/girl1.jpg" class="girl img-responsive" alt="" />
                                            <img src="images/pricing.png"  class="pricing" alt="" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <h1><span>E</span>-Vendas</h1>
                                            <h2>Os Melhores Estilos</h2>
                                            <p>Escolha seu estilo é seja feliz comprando o que á de melhor para você e com os melhores preços do mercado! click e confira... </p>
                                            <button type="button" class="btn btn-default get">Click e Confira</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="images/girl2.jpg" class="girl img-responsive" alt="" />
                                            <img src="images/pricing.png"  class="pricing" alt="" />
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="col-sm-6">
                                            <h1><span>E</span>-Vendas</h1>
                                            <h2>Vai para algum local Importante ?</h2>
                                            <p>Escolha um vestido TOP de linha é seja feliz comprando o que á de melhor para você e com os melhores preços do mercado! click e confira... </p>
                                            <button type="button" class="btn btn-default get">Click e Confira</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="images/girl3.jpg" class="girl img-responsive" alt="" />
                                            <img src="images/pricing.png" class="pricing" alt="" />
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="left-sidebar">
                                <h2>Categoria</h2>
                                <div class="panel-group category-products" id="accordian"><!--Categoria_dos_Produtos-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Esportes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="sportswear" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Nike </a></li>
                                                    <li><a href="#">Mizzuno </a></li>
                                                    <li><a href="#">Adidas </a></li>
                                                    <li><a href="#">Puma</a></li>
                                                    <li><a href="#">ASICS </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Homens
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="mens" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Oakley</a></li>
                                                    <li><a href="#">7 Mares</a></li>
                                                    <li><a href="#">Orient</a></li>
                                                    <li><a href="#">Mormai</a></li>
                                                    <li><a href="#">Vans</a></li>
                                                    <li><a href="#">Armani</a></li>
                                                    <li><a href="#">Hollister</a></li>
                                                    <li><a href="#">Polo</a></li>
                                                    <li><a href="#">Calvin Klein</a></li>
                                                    <li><a href="#">Ralph Lauren</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                    Mulheres
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="womens" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Kenzo Jeans</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                    <li><a href="#">Valentino</a></li>
                                                    <li><a href="#">Polo</a></li>
                                                    <li><a href="#">Dolce e Cabbana</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="#">Criança</a></h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="#">Fashion</a></h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="#">Para Familia</a></h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="#">Acessorios</a></h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="#">Shorts</a></h4>
                                        </div>
                                    </div>
                                </div><!--/Categoria_dos_Produtos-->
                            
                                <div class="brands_products"><!--Marcas_dos_Produtos-->
                                    <h2>Marcas</h2>
                                    <div class="brands-name">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li><a href="#"> <span class="pull-right">(50)</span>Armani</a></li>
                                            <li><a href="#"> <span class="pull-right">(56)</span>Dolce e Cabbana</a></li>
                                            <li><a href="#"> <span class="pull-right">(27)</span>Orient</a></li>
                                            <li><a href="#"> <span class="pull-right">(32)</span>Ralph Lauren</a></li>
                                            <li><a href="#"> <span class="pull-right">(5)</span>Calvin Klein</a></li>
                                            <li><a href="#"> <span class="pull-right">(9)</span>Gucci</a></li>
                                            <li><a href="#"> <span class="pull-right">(4)</span>Valentino</a></li>
                                        </ul>
                                    </div>
                                </div><!--/Marcas_dos_Produtos-->
                                
                                <div class="price-range"><!--Faixa_de_Preço-->
                                    <h2>Faixa de Preço</h2>
                                    <div class="well text-center">
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="2400" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                            <b class="pull-left">R$ 0</b> <b class="pull-right">R$ 2400</b>
                                    </div>
                                </div><!--/Faixa_de_Preço-->
                            
                            </div>
                        </div>
                        
                        <div class="col-sm-9 padding-right">
                            <div class="features_items"><!--Itens de Recurso-->
                                <h2 class="title text-center">Itens</h2>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/product1.jpg" alt="" />
                                                    <h2>R$ 60</h2>
                                                    <p>Camisa Azul-Esculo - Longa - Valentino</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                                                </div>
                                                <div class="product-overlay">
                                                    <div class="overlay-content">
                                                        <h2>R$ 60</h2>
                                                        <p>Camisa Azul-Esculo - Longa - Valentino</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Adicionar para os Favoritos</a></li>
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Adicionar na Lista de Desejos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/product2.jpg" alt="" />
                                                <h2>R$ 135</h2>
                                                <p>Polo White Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>R$ 135</h2>
                                                    <p>Polo White Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Adicionar para os Favoritos</a></li>
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Adicionar para para lista de desejos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/product3.jpg" alt="" />
                                                <h2>R$ 89,90</h2>
                                                <p>Vestido Preto - Gucci</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>R$ 89,90</h2>
                                                    <p>Vestido Preto - Gucci</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Adicionar para os Favoritos</a></li>
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Adicionar para para lista de desejos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div><!--Itens de Recurso-->
                            
                            <div class="recommended_items"><!--Itens_Recomendados-->
                                <h2 class="title text-center">Itens Recomendados</h2>
                                
                                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">	
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/recommend1.jpg" alt="" />
                                                            <h2>R$ 76</h2>
                                                            <p>Camisa Polo Listrada - Feminina - Preto/Branca</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/recommend2.jpg" alt="" />
                                                            <h2>R$ 76</h2>
                                                            <p>Camisa XingLing China Vermelha - Feminina</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/recommend3.jpg" alt="" />
                                                            <h2>R$ 86</h2>
                                                            <p>Camisa Sexy Rose - Feminina</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/recommend1.jpg" alt="" />
                                                            <h2>R$ 76</h2>
                                                            <p>Camisa Polo Listrada - Feminina - Preto/Branca</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/recommend2.jpg" alt="" />
                                                            <h2>R$ 76</h2>
                                                            <p>Camisa XingLing China Vermelha - Feminina</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/recommend3.jpg" alt="" />
                                                            <h2>R$ 86</h2>
                                                            <p>Camisa Sexy Rose - Feminina</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                        </a>			
                                </div>
                            </div><!--/Itens Recomendados-->
                            
                        </div>
                    </div>
                </div>
            </section>
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

    </body>
</html>
