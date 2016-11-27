<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Faça login na sua conta</h2>
                    <form id="login-form">
                        <input type="email" name="email_login" placeholder="E-Mail" />
                        <input type="password" name="password_login" placeholder="Senha" />
                        <!--<span><input type="checkbox" class="checkbox">Mantenha-me conectado</span>-->
                        <button type="submit" class="btn btn-default">Login</button>
                        <br>
                    </form>
                    <div class="alert hidden" id="login-messages" role="alert"></div>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OU</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Inscrição para Novo Usuário!</h2>
                    <form id="signup-form">
                        <input type="email" name="email_signup" placeholder="E-Mail"/>
                        <input type="text" name="name_signup" placeholder="Nome"/>
                        <input type="password" name="password_signup" placeholder="Senha"/>
                        <button type="submit" class="btn btn-default">Inscreva-se</button>
                        <br>
                    </form>
                    <div class="alert hidden" id="signup-messages" role="alert"></div>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<script>
    $(document).on('submit', '#login-form', function(e) {
        e.preventDefault();

        var email = $("input[name=email_login]").val();
        var password = $("input[name=password_login]").val();

        $.post(url + "authenticate", { email: email, password: password, _token: token })
        .done(function(data) {
            if(data.step == "true") {
                window.location.href = data.redirect;
            } else if(data.step == "false") {
                $("#login-messages").removeClass("hidden").addClass("alert-warning").html("Nome de usuario ou senha incorretos");
                setTimeout(function() {
                    $("#login-messages").removeClass("alert-warning").addClass("hidden");
                }, 2000);
            }
        })
        .fail(function() {
            $("#login-messages").removeClass("hidden").addClass("alert-danger").html("Houve algum erro desculpe-nos");
            setTimeout(function() {
                $("#login-messages").removeClass("alert-danger").addClass("hidden");
            }, 2000);
        });
    });

    $(document).on('submit', '#signup-form', function(e) {
        e.preventDefault();

        var name = $("input[name=name_signup]").val();
        var password = $("input[name=password_signup]").val();
        var email = $("input[name=email_signup]").val();

        $.post(url + "register", { name: name, password: password, email: email, _token: token })
        .done(function(data) {
            if(data.status == "OK") {
                $("#signup-messages").removeClass("hidden").addClass("alert-success").html("Usuario cadastrado com sucesso!");
                setTimeout(function() {
                    $("#signup-messages").removeClass("alert-warning").addClass("hidden");
                }, 2000);
            }
        })
        .fail(function() {
            $("#signup-messages").removeClass("hidden").addClass("alert-danger").html("Houve algum erro desculpe-nos");
            setTimeout(function() {
                $("#signup-messages").removeClass("alert-danger").addClass("hidden");
            }, 2000);
        });
    });
</script>