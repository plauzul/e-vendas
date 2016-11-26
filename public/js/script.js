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
});