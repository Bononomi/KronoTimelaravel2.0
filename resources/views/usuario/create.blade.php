
<html class="h-100" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>KronoTime</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/assets/images/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="{{url('/')}}/css/style.css" rel="stylesheet">

    </head>

    <body class="h-100">

       

        <script>

            function addUsuario(url){

            confirma = confirm("Deseja realmente cadastrar o usuario?");
            if (confirma){


            dados = $('#formAdd').serialize();
            $.ajax({
            method: 'post',
                    url: url,
                    data: dados,
                    dataType: 'html',
                    success: function (data) {
                    location.href = "/usuario";
                    },
                    error: function (argument){
                    alert ('Falha ao cadastrar usuario!');
                    }
            });
            }
            return false;
            }


        </script>



        <div class="login-form-bg h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5">

                                    <a class="text-center" href="index.html"> <h4>Registrar-se</h4></a>

                                    <form action="" method="post" id="formAdd" onsubmit="return addUsuario('{{route('usuario.store')}}')">
                                        @csrf
                                        @method('post')
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control"  placeholder="Email" required name="emailUsu">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Senha" required name="senhaUsu">
                                        </div>
                                        <button class="btn login-form__btn submit w-100">Registrar</button>
                                    </form>
                                    <p class="mt-5 login-form__footer">Tem uma conta? <a href={{url('/')}}/login class="text-primary">Entrar </a> agora</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{url('/')}}/plugins/common/common.min.js"></script>
    <script src="{{url('/')}}/js/custom.min.js"></script>
    <script src="{{url('/')}}/js/settings.js"></script>
    <script src="{{url('/')}}/js/gleek.js"></script>
    <script src="{{url('/')}}/js/styleSwitcher.js"></script>
</body>
</html>

