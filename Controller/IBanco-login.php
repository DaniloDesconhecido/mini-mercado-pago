<?php
    require_once "../Model/MBanco_login.php";

    $usuario = filter_input(INPUT_POST,"usuario", FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST,"senha", FILTER_SANITIZE_STRING);

    $login = new BancoLogin();

    $login->verificarLogin($usuario,$senha);
?>