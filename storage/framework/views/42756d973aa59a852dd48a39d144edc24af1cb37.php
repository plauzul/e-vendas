<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
        <div class="col-sm-4 box-product" data-id="<?php echo e($row->id); ?>" data-title="<?php echo e($row->title); ?>">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="<?php echo e($row->img); ?>" />
                        <h2>R$ <?php echo e($row->price); ?></h2>
                        <p><?php echo e($row->title); ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar para o Carrinho</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>R$ <?php echo e($row->price); ?></h2>
                            <p><?php echo e($row->title); ?></p>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">Nenhum produto no momento</h3>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>