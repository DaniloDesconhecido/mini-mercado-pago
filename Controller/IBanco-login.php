<?php
    require_once "../Model/MBanco_login.php";

    $usuario = filter_input(INPUT_POST,"usuario", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST,"senha", FILTER_SANITIZE_STRING);

    $login = new BancoLogin();

    echo $login->verificarLogin($usuario,$senha);
?>