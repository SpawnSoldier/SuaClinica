<?php

    use Database\Database;

    if (isset ($_POST ['cadastrarUsuario'])) {
        $cadastrarUsuario = $_POST['cadastrarUsuario'];
    } else {
        $cadastrarUsuario = null;
    }
    if (isset ($_POST ['cadastrarSenha'])) {
        $cadastrarSenha = $_POST['cadastrarSenha'];
    } else {
        $cadastrarSenha = null;
    }
    require_once "../SuaClinica-main/src/model/Database.php";
    

    $db = new Database();
    
    $db->insert(
        "INSERT INTO cadastros(nome, senha) VALUES ('$cadastrarUsuario' , '$cadastrarSenha')"
    );

    $redirect ="<meta http-equiv='refresh' content='0; url=index.php'/>";
?>
<?= (isset($redirect) ? $redirect : "<hr>") ?>