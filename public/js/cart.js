$(function() {
    cart = {
        addCart: function(cart) {
            var iten = JSON.parse(localStorage.getItem("itens"));

            if(iten) {
                iten.push(cart);
                localStorage.setItem("itens", JSON.stringify(iten));
            } else {
                localStorage.setItem("itens", JSON.stringify([{id: cart.id}]));
            }
        },

        removeCart: function(cart) {
            var itens = JSON.parse(localStorage.getItem("itens"));

            newItens = $.grep(itens, function(value) {
                return value.id != cart.id;
            });

            localStorage.setItem("itens", JSON.stringify(newItens));
        },

        countCart: function() {
            var itens = JSON.parse(localStorage.getItem("itens"));

            if(itens) {
                return itens.length;
            }

            return null;
        }
    }
});