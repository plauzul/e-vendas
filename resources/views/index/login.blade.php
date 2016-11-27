<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Faça login na sua conta</h2>
                    <form action="#">
                        <input type="email" name="email_login" placeholder="E-Mail" />
                        <input type="password" name="password_login" placeholder="Senha" />
                        <!--<span><input type="checkbox" class="checkbox">Mantenha-me conectado</span>-->
                        <button type="submit" class="btn btn-default">Login</button>
                        <br>
                    </form>
                    <div class="alert alert-dismissible hidden" id="login-messages" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OU</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Inscrição para Novo Usuário!</h2>
                    <form action="#">
                        <input type="text" placeholder="Nome"/>
                        <input type="email" placeholder="Endereço de E-Mail"/>
                        <input type="password" placeholder="Senha"/>
                        <button type="submit" class="btn btn-default">Inscreva-se</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<script>
    $(document).on('submit', '.login-form', function(e) {
        e.preventDefault();

        var email = $("input[name=email_login]").val();
        var password = $("input[name=password_login]").val();

        $.post(url + "authenticate", {email: email, password: password, _token: token })
        .done(function(data) {
            if(data.step == "true") {
                window.location.href = data.redirect;
            } else if(data.step == "false") {
                $("#login-messages").removeClass("hidden").addClass("alert-warning").append("Nome de usuario ou senha incorretos");
            }
        })
        .fail(function(xhr, status, error) {
            $("#login-messages").removeClass("hidden").addClass("alert-danger").append("Houve algum erro desculpe-nos");
        });
    });
</script>