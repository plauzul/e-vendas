$(function() {
    cart = {
        addCart: function(cart) {
            var iten = JSON.parse(sessionStorage.getItem("itens"));

            if(iten) {
                iten.push(cart);
                sessionStorage.setItem("itens", JSON.stringify(iten));
            } else {
                sessionStorage.setItem("itens", JSON.stringify([{id: cart.id}]));
            }
        },

        removeCart: function(cart) {
            var itens = JSON.parse(sessionStorage.getItem("itens"));

            newItens = $.grep(itens, function(value) {
                return value.id != cart.id;
            });

            sessionStorage.setItem("itens", JSON.stringify(newItens));
        },

        countCart: function() {
            var itens = JSON.parse(sessionStorage.getItem("itens"));

            if(itens) {
                return itens.length;
            }

            return null;
        },

        countFavorite: function() {
            var favorite = JSON.parse(localStorage.getItem("favorite"));

            if(favorite) {
                return favorite.length;
            }

            return null;
        },

        addFavorite: function(cart) {
            var favorite = JSON.parse(localStorage.getItem("favorite"));

            if(favorite) {
                favorite.push(cart);
                localStorage.setItem("favorite", JSON.stringify(favorite));
            } else {
                localStorage.setItem("favorite", JSON.stringify([{id: cart.id}]));
            }
        },

        removeFavorite: function(cart) {
            var favorite = JSON.parse(localStorage.getItem("favorite"));

            newItens = $.grep(favorite, function(value) {
                return value.id != cart.id;
            });

            localStorage.setItem("favorite", JSON.stringify(newItens));
        },

        calculePriceOfQuantity: function(cart) {
            return "R$ " + cart.valueCartQuantity * cart.price;
        }
    }
});