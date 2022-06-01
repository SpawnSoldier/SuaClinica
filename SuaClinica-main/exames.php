<?php

use Database\Database;

    if(isset($_POST['regiao'])){
        $regiao = $_POST['regiao'];
    }else{
        $regiao=null;
    }
    if(isset($_POST['especialidade'])){
        $especialidade = $_POST['especialidade'];
    }else{
        $especialidade=null;
    }

    if ($especialidade == 1) {
        $exame = "Colonoscopia";
    } elseif ($especialidade == 2) {
        $exame = "Proctologista";
    } elseif ($especialidade == 3) {
        $exame = "Cardiologista";
    } elseif ($especialidade == 4) {
        $exame = "Otorrinolaringologista";
    } elseif ($especialidade == 5) {
        $exame = "Ortopedista";
    } else {
        $exame = "Oftalmologista";
    } 

    require_once "../SuaClinica-main/src/model/Database.php";

    $datab = new Database;

    $resultDatab = $datab->select(
        "SELECT * FROM clinicas WHERE id_regiao = '$regiao';"
    );
        
    
    if(isset($resultDatab[0])){
        $regiaoDb = $resultDatab[0]->regiao;
        $telefoneDb = $resultDatab[0]->telefone;
        $enderecoDb = $resultDatab[0]->endereco;
        $precoDb = $resultDatab[0]->preco;
        $clinicaDb = $resultDatab[0]->nome_clinica;
    } else {
        $regiaoDb = null;
        $telefoneDb = null;
        $enderecoDb = null;
        $precoDb = null;
        $clinicaDb = null;
    }

    if(isset($resultDatab[1])){
        $regiaoDb2 = $resultDatab[1]->regiao;
        $telefoneDb2 = $resultDatab[1]->telefone;
        $enderecoDb2 = $resultDatab[1]->endereco;
        $precoDb2 = $resultDatab[1]->preco;
        $clinicaDb2 = $resultDatab[1]->nome_clinica;
    } else {
        $regiaoDb2 = null;
        $telefoneDb2 = null;
        $enderecoDb2 = null;
        $precoDb2 = null;
        $clinicaDb2 = null;
    }

    if(isset($resultDatab[2])){
        $regiaoDb3 = $resultDatab[2]->regiao;
        $telefoneDb3 = $resultDatab[2]->telefone;
        $enderecoDb3 = $resultDatab[2]->endereco;
        $precoDb3 = $resultDatab[2]->preco;
        $clinicaDb3 = $resultDatab[2]->nome_clinica;
    } else {
        $regiaoDb3 = null;
        $telefoneDb3 = null;
        $enderecoDb3 = null;
        $precoDb3 = null;
        $clinicaDb3 = null;
    }

    if(isset($resultDatab[3])){
        $regiaoDb4 = $resultDatab[3]->regiao;
        $telefoneDb4 = $resultDatab[3]->telefone;
        $enderecoDb4 = $resultDatab[3]->endereco;
        $precoDb4 = $resultDatab[3]->preco;
        $clinicaDb4 = $resultDatab[3]->nome_clinica;
    } else {
        $regiaoDb4 = null;
        $telefoneDb4 = null;
        $enderecoDb4 = null;
        $precoDb4 = null;
        $clinicaDb4 = null;
    }
?>


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

    <link rel="stylesheet" href="css/style_exama.css">
</head>

<body>
    <!-- inicio navbar -->
    <nav class="border-bottom border-dark navbar navbar-light bg- meunav">

        <button class="navbar-toggler meuicon" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="sociais">
            <!-- logo face -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
            <!-- fim logo face -->

            <!-- logo insta -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="insta bi bi-instagram" viewBox="0 0 16 16">
                <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
            <!-- fim logo insta -->

            <!-- logo twitter -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
                viewBox="0 0 16 16">
                <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>
            <!-- fim logo twitter -->

        </div>

        <div class="imgNav"><img src="img/logo_menor.png" class="navLogo" alt=""></div>

        <div class="teste collapse navbar-collapse" id="navbarNav">
            <ul class=" linkNav navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="clinicas.php"><b> Clinicas</b> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buscar_exames.php"><b> Exames </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php"><b> Home </b></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- fim navbar -->

    <!-- container Principal -->
    <div class="cont_principal">
        <!-- inicio do primeiro titulo com escolha regiao -->
           <p class="titulo2"> <b > Preço do exame proximo a sua região: </b> </p>

        <!-- Fim do primeiro titulo com escolha regiao -->


        <!-- inicio div exames -->
        <div class="exame">
            <div class="imgClinica">
                <img src="img/minhaclinica.jpg" alt="">
            </div>
            <div class="descricao">
                <p><b> <?php echo $exame?></b></p>
                <p><b>Preço:</b> <?php echo $precoDb?></p>
                <p><b>Clinica:</b> <?php echo $clinicaDb?></p>
                <p><b> Endereço:</b> <?php echo $enderecoDb?></p>
                <p><b>Telefone:</b> <?php echo $telefoneDb?></p>
        
            </div>

        </div>
        <!-- fim div exames -->

        <div class="divisao2">

        </div>

        <!-- inicio div exames -->
        <div class="exame2">
            <div class="imgClinica">
                <img src="img/minhaclinica.jpg" alt="">
            </div>
            <div class="descricao">
                <p><b> <?php echo $exame?></b></p>
                <p><b>Preço:</b> <?php echo $precoDb2?></p>
                <p><b>Clinica:</b> <?php echo $clinicaDb2?></p>
                <p><b> Endereço:</b> <?php echo $enderecoDb2?></p>
                <p><b>Telefone:</b> <?php echo $telefoneDb2?></p>
        
            </div>

        </div>
        <!-- fim div exames -->

        <div class="divisao2">

        </div>

        <!-- inicio div exames -->
        <div class="exame">
            <div class="imgClinica">
                <img src="img/minhaclinica.jpg" alt="">
            </div>
            <div class="descricao">
                <p><b> <?php echo $exame?></b></p>
                <p><b>Preço:</b> <?php echo $precoDb3?></p>
                <p><b>Clinica:</b> <?php echo $clinicaDb3?></p>
                <p><b> Endereço:</b> <?php echo $enderecoDb3?></p>
                <p><b>Telefone:</b> <?php echo $telefoneDb3?></p>
            </div>

        </div>
        <!-- fim div exames -->

        <div class="divisao2">

        </div>

        <!-- inicio div exames -->
        <div class="exame2">
            <div class="imgClinica">
                <img src="img/minhaclinica.jpg" alt="">
            </div>
            <div class="descricao">
                <p><b> <?php echo $exame?></b></p>
                <p><b>Preço:</b> <?php echo $precoDb4?></p>
                <p><b>Clinica:</b> <?php echo $clinicaDb4?></p>
                <p><b> Endereço:</b> <?php echo $enderecoDb4?></p>
                <p><b>Telefone:</b> <?php echo $telefoneDb4?></p>
        
            </div>

        </div>
        <!-- fim div exames -->

    </div>
    <!-- Fim container Principal -->

    <!-- inicio footer -->
    <div id="page-content">

        <footer id="sticky-footer" class=" border-top border-dark flex-shrink-0 py-4 bg-  meufooter">
            <div class="container text-center">
                Copyright &copy; Your Website
            </div>
        </footer>
    </div>
    <!-- fim footer -->

</body>

</html>