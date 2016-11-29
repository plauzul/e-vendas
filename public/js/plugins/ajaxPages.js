/**
 * @author Paulo Henrique Ramos Ferreira
 * @description Plugin para facilitação do carregamento das paginas atraves do ajax sem recarregamento total da pagina
 */

$(function() {

    verifyLoadGo();

    $(document).on("click", ".load", function(e) {
        e.preventDefault();

        let imgData = $(this).data("img-load");

        $($(this).data("content")).html("");

        $(imgData).removeClass("hidden");

        $($(this).data("content")).load($(this).data("href"), function() {
            $(imgData).addClass("hidden");
            loadGo();
        });
    });

    function verifyLoadGo() {
        countLoadsGo = $(".load-go").length;

        if(countLoadsGo) {
            loadGo();
            $(".load-go").removeClass("load-go").addClass("load-go-ok");
        }
    }

    function loadGo() {
        $(".load-go").each(function() {
            let imgData = $(this).data("img-load");
            $($(this)).load($(this).data("href"), function() {
                $(imgData).addClass("hidden");
                verifyLoadGo();
            });
        });
    }
});