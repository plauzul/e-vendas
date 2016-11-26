<section id="cart_items"><!--cart_items-->
    <div class="container">
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
            </table>
        </div>
        <p><button class="btn btn-primary btn-lg">Ir para o caixa</button></p>
    </div>
</section><!--/cart_items-->

<script>
    var itens = JSON.parse(localStorage.getItem("itens"));

    if(itens[0]) {
        itens.forEach(function(value) {
            $.get("http://localhost/e-vendas/public/api/products/" + value.id, function(data) {
                $("#tbody").append(`
                    <tr data-id="`+data.id+`">
                        <td class="cart_product">
                            <a href=""><img src="`+data.img+`" width="150"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">`+data.title+`</a></h4>
                            <p>`+data.description+`</p>
                        </td>
                        <td class="cart_price">
                            <p>`+data.price+`</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">`+data.price+`</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="" id="remove-cart"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                `);
            });
        });
    } else {
        $(tbody).html(`
            <tr>
                <td colspan="6"><h1 class="text-center">Nenhum iten encontrado.</h1></td>
            </tr>
        `);
    }
</script>