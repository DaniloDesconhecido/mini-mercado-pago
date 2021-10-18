<?php
    session_start();
    require_once "../Model/MBanco-cadastrar-conta.php";

    $cadastrar = new CadastrarDAO();

    $cadastrar->setnome(filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING));
    $cadastrar->setsobrenome(filter_input(INPUT_POST,"sobrenome",FILTER_SANITIZE_STRING));
    $cadastrar->setdatadenascimento(filter_input(INPUT_POST,"datadenascimento",FILTER_SANITIZE_STRING));
    $cadastrar->setemail(filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING));
    $cadastrar->settelefone(filter_input(INPUT_POST,"telefone",FILTER_SANITIZE_NUMBER_INT));
    $cadastrar->setcpf(filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_NUMBER_INT));
    $cadastrar->setsexo(filter_input(INPUT_POST,"sexo",FILTER_SANITIZE_STRING));
    $cadastrar->setrua(filter_input(INPUT_POST,"rua",FILTER_SANITIZE_STRING));
    $cadastrar->setcep(filter_input(INPUT_POST,"cep",FILTER_SANITIZE_NUMBER_INT));
    $cadastrar->setnumero(filter_input(INPUT_POST,"numero",FILTER_SANITIZE_NUMBER_INT));
    $cadastrar->setcidade(filter_input(INPUT_POST,"cidade",FILTER_SANITIZE_STRING));
    $cadastrar->setestado(filter_input(INPUT_POST,"estado",FILTER_SANITIZE_STRING));
    $cadastrar->setbairro(filter_input(INPUT_POST,"bairro",FILTER_SANITIZE_STRING));
    $cadastrar->setcomplemento(filter_input(INPUT_POST,"complemento",FILTER_SANITIZE_STRING));
 
    $_SESSION["nome"] = $cadastrar->getnome();
    $_SESSION["sobrenome"] = $cadastrar->getsobrenome();
    $_SESSION["datadenascimento"] = $cadastrar->getdatadenascimento();
    $_SESSION["email"] = $cadastrar->getemail();
    $_SESSION["telefone"] = $cadastrar->gettelefone();
    $_SESSION["cpf"] = $cadastrar->getcpf();
    $_SESSION["sexo"] = $cadastrar->getsexo();
    $_SESSION["rua"] = $cadastrar->getrua();
    $_SESSION["cep"] = $cadastrar->getcep();
    $_SESSION["numero"] = $cadastrar->getnumero();
    $_SESSION["cidade"] = $cadastrar->getcidade();
    $_SESSION["estado"] = $cadastrar->getestado();
    $_SESSION["bairro"] = $cadastrar->getbairro();
    $_SESSION["complemento"] = $cadastrar->getcomplemento();

    header("Location: ../View/Banco-criar-senha.html");
 
?>