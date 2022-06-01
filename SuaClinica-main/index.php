<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,200&display=swap" rel="stylesheet">
    <!-- Fim google fonts -->

    <!-- Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fim Bootstrap 4 -->

    <link rel="stylesheet" href="css/style_index.css">
</head>

<body>
    

    <!-- container Principal -->
    <div class="cont_principal">

        <!-- div login -->
        <div class="login">

            <form method="post" action="home.php">
                <h1>Login</h1>
                <input placeholder="Usuario" name=name type="text" id="nome" required>
                <input placeholder="Senha" name =pass type="password" id="senha" required>

                    <button onclick="" class="btnLogin" type="submit">Login</button>
                    <button class="btnLimpar" type="reset">Limpar</button>


                    
<!-- ------------------------------------------------------------------------------------------------- -->
                    <br><br>
                    <a href="../SuaClinica-main/cadastrar.php"> VUSÊ NAUM TEIN CADASTRU? CADASTRI-CI AKI!</a>
                    <a href="home.php">Entrar como visitante</a>
            </form>
            
           
        </div>
        <!-- Fim div login -->

    </div>
    <!-- Fim container Principal -->

</body>

</html>