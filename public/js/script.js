$(function() {
	"use strict";

    //adiciono o novo menu
    setInterval(() => {
        if($(document).scrollTop() >= 200) {
            $("#menu").css("margin-top", "0");
        } else {
            $("#menu").css("margin-top", "-100%");
        }
    }, 1);

    //adiciono o numero de pedidos ao carrinho
    setInterval(() => {
        $("#count-itens-cart1").html(cart.countCart());
        $("#count-itens-cart2").html(cart.countCart());
    }, 1);

    //adiciono o numero de favoritos
    setInterval(() => {
        $("#count-favorite1").html(cart.countFavorite());
        $("#count-favorite2").html(cart.countFavorite());
    }, 1);

    //auto complete para o input de search
    $("#search-product").easyAutocomplete({
        url: "http://localhost/e-vendas/public/api/products",

        getValue: "title",

        list: {
            showAnimation: {
                type: "fade",
                time: 400,
            },

            hideAnimation: {
                type: "fade",
                time: 400,
            }
        },

        template: {
            type: "iconLeft",
            fields: {
                iconSrc: "img",
                description: "price"
            }
        }
    });

    //filtro os produtos a parti do valor do input search
    $("#search-product").keyup(function(e) {
        $('.box-product[data-title]').each(function(index, value) {
            var regexp = new RegExp($("#search-product").val(), "gi");
            if($("#search-product").val() == "") {//se o campo de pesquisa estiver vazio mostro todos os produtos
                $(value).removeClass("hidden");
            }else if(!regexp.exec($(value).data('title'))) {//os produtos que não coresponderem a pesquisa serão apagados
                $(value).addClass("hidden");
            } else {//os iguais serão mostrados
                $(value).removeClass("hidden");
            }
        });
    });

    //adiciono item ao carrinhos
    $(document).on('click', '.add-to-cart', function(e) {
        cart.addCart({
            id: $(this).parent().parent().parent().parent().parent().data("id")
        });
    });

    //removo item do carrinho
    $(document).on('click', '#remove-cart', function(e) {
        e.preventDefault();

        $($(this).parent().parent()[0]).remove();

        cart.removeCart({id: $(this).parent().parent().data("id")});
    })

    //adiciono item aos favoritos
    $(document).on('click', "#add-favorites", function(e) {
        e.preventDefault();

        cart.addFavorite({
            id: $(this).parent().parent().parent().parent().parent().data("id")
        });
    });

    //removo um favoritos
    $(document).on('click', '#remove-favorite', function(e) {
        e.preventDefault();

        $($(this).parent().parent()[0]).remove();

        cart.removeFavorite({id: $(this).parent().parent().data("id")});
    });

    //adiciono mais itens ao carrinho
    $(document).on('click','.cart_quantity_up', function(e) {
        e.preventDefault();

        var valueCartQuantity = $(this).parent().find(".cart_quantity_input").val();

        valueCartQuantity++;

        $(this).parent().find(".cart_quantity_input").val(valueCartQuantity);

        $(this).parent().parent().parent().find(".cart_total_price").html(cart.calculePriceOfQuantity({
            price: $(this).parent().parent().parent().data("price"),
            valueCartQuantity: valueCartQuantity
        }));
    });

    //diminuo itens do carrinho
    $(document).on('click','.cart_quantity_down', function(e) {
        e.preventDefault();

        var valueCartQuantity = $(this).parent().find(".cart_quantity_input").val();

        valueCartQuantity--;

        if(valueCartQuantity >= 0) {
            $(this).parent().find(".cart_quantity_input").val(valueCartQuantity);

            $(this).parent().parent().parent().find(".cart_total_price").html(cart.calculePriceOfQuantity({
                price: $(this).parent().parent().parent().data("price"),
                valueCartQuantity: valueCartQuantity
            }));
        }
    });

    //adiciono novo valor ao item apartir da mudança do valor no input
    $(document).on('keyup', '.cart_quantity_input', function(e) {
        $(this).parent().parent().parent().find(".cart_total_price").html(cart.calculePriceOfQuantity({
            price: $(this).parent().parent().parent().data("price"),
            valueCartQuantity: $(this).val()
        }));
    });

    //crio janela para o pagamento
    $(document).on('click', '#go-cashier', function(e) {
        $("#modal").iziModal({
            title: 'Caixa',
            headerColor: '#FE980F',
            zindex: 9999,
            width: 800,
            padding: 5,
            onOpening: function(modal) {
                modal.startLoading();
                $.get(url + 'payment', function(data) {
                    $("#modal .iziModal-content").html(data);
                    modal.stopLoading();
                });
            }
        }).iziModal('open');
    });
});