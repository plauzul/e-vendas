<section><!-- produc-details -->
    <div class="container">
        <div class="row">            
            <div class="col-sm-12 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{ $product->img }}" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2>{{ $product->title }}</h2>
                            <span>
                                <span>R$ {{ $product->price }}</span>
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Ir para o caixa
                                </button>
                            </span>
                            <p><b>Disponibilidade:</b> No Estoque</p>
                            <p><b>Condição:</b> {{ $product->state }}</p>
                            <p><b>Marca:</b> {{ $product->brand }}</p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab">Comentarios (0)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            @if(Auth::check())
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a><i class="fa fa-user"></i>{{ Auth::user()->name }}</a></li>
                                        <li><a><i class="fa fa-clock-o"></i> {{ date("H:i") }}</a></li>
                                        <li><a><i class="fa fa-calendar-o"></i> {{ date("d M Y") }}</a></li>
                                    </ul>
                                    <p>{{ $product->description }}</p>
                                    <p><b>Escreva seu comentario</b></p>
                                    
                                    <form action="#">
                                        <input type="hidden" name="id-user" value="{{ Auth::user()->id }}" />
                                        <textarea name="comment" ></textarea>
                                        <button type="button" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="col-sm-12">
                                    <h1 class="text-center">Faça <a class="load" href="" data-href="{{ url('login') }}" data-content=".box-content" data-img-load="#img-load">login</a> para poder comentar</h1>
                                </div>
                            @endif
                        </div>                        
                    </div>
                </div><!--/category-tab-->

            </div>
        </div>
    </div>
</section><!-- /produc-details -->