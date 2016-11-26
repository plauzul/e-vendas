$(function() {
	"use strict";

    setInterval(() => {
        if($(document).scrollTop() >= 200) {
            $("#menu").css("margin-top", "0");
        } else {
            $("#menu").css("margin-top", "-100%");
        }
    }, 1);

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
});