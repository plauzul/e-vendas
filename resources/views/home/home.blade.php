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
								<p>Escolha seu estilo é seja feliz comprando o que á de melhor para você e com os melhores preços do mercado!</p>
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
								<p>Escolha um vestido TOP de linha é seja feliz comprando o que á de melhor para você e com os melhores preços do mercado!</p>
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
								<h4 class="panel-title"><a class="load" href="" data-href="{{ url('home/all') }}" data-content=".box-itens" data-img-load="#img-load-products">Todos</a></h4>
							</div>
						</div>
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
										<li><a class="load" href="" data-href="{{ url('home/nike') }}" data-content=".box-itens" data-img-load="#img-load-products">Nike </a></li>
										<li><a class="load" href="" data-href="{{ url('home/mizzuno') }}" data-content=".box-itens" data-img-load="#img-load-products">Mizzuno </a></li>
										<li><a class="load" href="" data-href="{{ url('home/adidas') }}" data-content=".box-itens" data-img-load="#img-load-products">Adidas </a></li>
										<li><a class="load" href="" data-href="{{ url('home/puma') }}" data-content=".box-itens" data-img-load="#img-load-products">Puma</a></li>
										<li><a class="load" href="" data-href="{{ url('home/asics') }}" data-content=".box-itens" data-img-load="#img-load-products">ASICS </a></li>
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
										<li><a class="load" href="" data-href="{{ url('home/oakley') }}" data-content=".box-itens" data-img-load="#img-load-products">Oakley</a></li>
										<li><a class="load" href="" data-href="{{ url('home/7-mares') }}" data-content=".box-itens" data-img-load="#img-load-products">7 Mares</a></li>
										<li><a class="load" href="" data-href="{{ url('home/orient') }}" data-content=".box-itens" data-img-load="#img-load-products">Orient</a></li>
										<li><a class="load" href="" data-href="{{ url('home/mormai') }}" data-content=".box-itens" data-img-load="#img-load-products">Mormai</a></li>
										<li><a class="load" href="" data-href="{{ url('home/vans') }}" data-content=".box-itens" data-img-load="#img-load-products">Vans</a></li>
										<li><a class="load" href="" data-href="{{ url('home/armani') }}" data-content=".box-itens" data-img-load="#img-load-products">Armani</a></li>
										<li><a class="load" href="" data-href="{{ url('home/hollister') }}" data-content=".box-itens" data-img-load="#img-load-products">Hollister</a></li>
										<li><a class="load" href="" data-href="{{ url('home/polo') }}" data-content=".box-itens" data-img-load="#img-load-products">Polo</a></li>
										<li><a class="load" href="" data-href="{{ url('home/calvin-klein') }}" data-content=".box-itens" data-img-load="#img-load-products">Calvin Klein</a></li>
										<li><a class="load" href="" data-href="{{ url('home/ralph-lauren') }}" data-content=".box-itens" data-img-load="#img-load-products">Ralph Lauren</a></li>
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
										<li><a class="load" href="" data-href="{{ url('home/kenzo-jeans') }}" data-content=".box-itens" data-img-load="#img-load-products">Kenzo Jeans</a></li>
										<li><a class="load" href="" data-href="{{ url('home/gucci') }}" data-content=".box-itens" data-img-load="#img-load-products">Gucci</a></li>
										<li><a class="load" href="" data-href="{{ url('home/valentino') }}" data-content=".box-itens" data-img-load="#img-load-products">Valentino</a></li>
										<li><a class="load" href="" data-href="{{ url('home/dolce-e-cabbana') }}" data-content=".box-itens" data-img-load="#img-load-products">Dolce e Cabbana</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a class="load" href="" data-href="{{ url('home/crianca') }}" data-content=".box-itens" data-img-load="#img-load-products">Criança</a></h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a class="load" href="" data-href="{{ url('home/fashion') }}" data-content=".box-itens" data-img-load="#img-load-products">Fashion</a></h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a class="load" href="" data-href="{{ url('home/para-familia') }}" data-content=".box-itens" data-img-load="#img-load-products">Para Familia</a></h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a class="load" href="" data-href="{{ url('home/acessorios') }}" data-content=".box-itens" data-img-load="#img-load-products">Acessorios</a></h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a class="load" href="" data-href="{{ url('home/shorts') }}" data-content=".box-itens" data-img-load="#img-load-products">Shorts</a></h4>
							</div>
						</div>
					</div><!--/Categoria_dos_Produtos-->
				
					<div class="brands_products"><!--Marcas_dos_Produtos-->
						<h2>Marcas</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<li><a class="load" href="" data-href="{{ url('home/armani') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['armani'] }})</span>Armani</a></li>
								<li><a class="load" href="" data-href="{{ url('home/dolce-e-cabbana') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['dolceCabbana'] }})</span>Dolce e Cabbana</a></li>
								<li><a class="load" href="" data-href="{{ url('home/orient') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['orient'] }})</span>Orient</a></li>
								<li><a class="load" href="" data-href="{{ url('home/ralph-lauren') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['ralphLauren'] }})</span>Ralph Lauren</a></li>
								<li><a class="load" href="" data-href="{{ url('home/calvin-klein') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['calvinKlein'] }})</span>Calvin Klein</a></li>
								<li><a class="load" href="" data-href="{{ url('home/gucci') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['gucci'] }})</span>Gucci</a></li>
								<li><a class="load" href="" data-href="{{ url('home/valentino') }}" data-content=".box-itens" data-img-load="#img-load-products"><span class="pull-right">({{ $brands['valentino'] }})</span>Valentino</a></li>
							</ul>
						</div>
					</div><!--/Marcas_dos_Produtos-->				
				</div>
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--Itens de Recurso-->
					<h2 class="title text-center">Itens</h2>
					<section class="box-itens">
						<div class="load-go" data-href="{{url('list-products')}}" data-img-load="#img-load-products"></div>
					</section>
					<img src="images/load-img.gif" class="img-responsive center-block" id="img-load-products">
				</div><!--Itens de Recurso-->
				
				<div class="recommended_items"><!--Itens_Recomendados-->
					<h2 class="title text-center">Itens Recomendados</h2>					
					<section class="box-itens">
						<div class="load-go" data-href="{{url('recommended-items')}}" data-img-load="#img-load-recommended-items"></div>
					</section>
					<img src="images/load-img.gif" class="img-responsive center-block" id="img-load-recommended-items">
				</div><!--/Itens Recomendados-->
				
			</div>
		</div>
	</div>
</section>