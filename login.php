<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACME</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Colaborador</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-login">
        <h2 class="login-title">Login</h2>
        <form class="login-form" method="post">
            <div class="input-form">
                <label for="email">Email </label>
                <input id="email" type="email" placeholder="me@exemplo.com" name="email"/>
            </div>
            <div class="input-form">
                <label for="password">Senha </label>
                <input id="password" type="password" placeholder="Insira sua senha" name="password"/>
            </div>
            <button class="botao-form" id="botao-login" type="button" onclick="autenticar()" >Entrar</button>
            <span>Não possui uma conta de colaborador? Entre em contato <a href="#">Clicando aqui</a>.</span>
        </form>
    </div>

    <?php require_once 'view/parts/rodape.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script>

        function autenticar(){
            
            const email = $('#email').val();
            const senha = $('#password').val();
            

            if(email != '' && senha != ''){
                $.ajax({
                    url: 'config/autentica.php',
                    method: 'POST',
                    data: {
                        email: email,
                        senha: senha
                    }
                })
                .done((msg)=>{
                    if(msg == 'verificado'){
                        window.location.href = "view/admin.php?sts="+msg;
                    }else{
                        
                    }
                });
            }else{
                alert('Faltou preenchimento de algum campo!')
            }
        }

    </script>
</body>

</html>