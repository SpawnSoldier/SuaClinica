<?php
    use Database\Database;

    

    if(isset($_POST['name'])){
        $nome = $_POST['name'];
    }else{
        $nome=null;
    }
    if(isset($_POST['pass'])){
        $senha = $_POST['pass'];
    }else{
        $senha=null;
    }


    require_once "../SuaClinica-main/src/model/Database.php";

    $dbase = new Database();

    $resultDb = $dbase->select(
    "SELECT * FROM cadastros WHERE nome = '$nome';"
    );
    

    if(isset($resultDb[0])){
        $nomeDb = $resultDb[0]->nome;
        $senhaDb = $resultDb[0]->senha;
    } else {
        $nomeDb = null;
        $senhaDb = null;
    }

    if($nome != null && $senha != null) {
        if($nome == $nomeDb && $senha == $senhaDb ) {
            $msg = 'Bem vindo!';
            // $redirect = "<meta http-equiv='refresh' content='1; url=https://www.youtube.com' />";
        } else {
            $msg = 'Acesso negado!';
            // var_dump($nomeDb);
            // var_dump($senhaDb);
            $redirect = "<meta http-equiv='refresh' content='0; url=index.php' />";
        }
    }
    
   
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    <link rel="stylesheet" href="css/style_home.css">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="face bi bi-facebook"
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="twitter bi bi-twitter"
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
                    <a class="nav-link" href="#"><b> Home</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- fim navbar -->

    <!-- inicio container principal -->
    
    <div class="containePrincipal">
        <div class="bem">
            <p class="bemVindo"> <b> Bem Vindo(a) <?php 
             if ($nomeDb != null) {
                echo $nomeDb;
            } else {
                $nomeDb = $nome;
                
                echo "visitante";
            }
            ?></b></p>
        </div>
        <p class="titulo1"> Melhores Clinicas</p>
        <!-- inicio carrousel -->
        <div id="carouselExampleIndicators" class="meucarrousel carousel slide" data-ride="carousel">
            <ol class="carousel-indicators ul">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/clinica1.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="letraCarrousel">Titulo</h5>
                        <p class="letraCarrousel">Lorem Ipsum is simply dummy text of the printing and</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/clinica2.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="letraCarrousel">Titulo</h5>
                        <p class="letraCarrousel">Lorem Ipsum is simply dummy text of the printing and</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/clinica3.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="letraCarrousel">Titulo</h5>
                        <p class="letraCarrousel">Lorem Ipsum is simply dummy text of the printing and</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- fim carrousel -->

        <!-- Inicio mais procurados -->
        <p class="titulo1">Mais procurados</p>

        <div class="maisProcurados">

            <div class="cardiologia">
                <p><b>cardiologia </b></p>
            </div>

            <div class="exToque">
                <p><b> Raio X </b></p>


            </div>

            <div class="colonoscopia">
                <p><b>colonoscopia </b></p>
            </div>

            <div class="otorrino">
                <p><b>otorrino </b></p>
            </div>
        </div>
        <!-- fim mais procurados -->

    </div>
    <!-- fim container principal -->
    <?= (isset($redirect) ? $redirect : "<hr>") ?>
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