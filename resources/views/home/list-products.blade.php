<div class="row">
    @forelse($products as $row)
        <div class="col-sm-4 box-product" data-id="{{ $row->id }}" data-title="{{ $row->title }}">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ $row->img }}" />
                        <h2>R$ {{ $row->price }}</h2>
                        <p>{{ $row->title }}</p>
                        <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</button>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>R$ {{ $row->price }}</h2>
                            <p>{{ $row->title }}</p>
                            <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</button>
                        </div>
                    </div>
                    @if($row->state)
                        <img src="images/{{ $row->state }}.png" class="{{ $row->state }}">
                    @endif                    
                </div>
                @if(Auth::check())
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="" id="add-favorites" ><i class="fa fa-plus-square"></i>Adicionar para os Favoritos</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    @empty
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">Nenhum produto no momento</h3>
                </div>
            </div>
        </div>
    @endforelse
</div>