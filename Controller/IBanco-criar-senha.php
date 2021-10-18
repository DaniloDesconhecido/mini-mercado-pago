<?php
    session_start();
    require_once "../Model/MBanco-cadastrar-conta.php";
    require_once "../Model/MBanco-criar-senha.php";

    $cadastrar = new CadastrarDAO();
    $banco = new BancoLogin();

    $cadastrar->setsenha(filter_input(INPUT_POST,"senha", FILTER_SANITIZE_STRING));   
   
   echo $banco->InserirUsuario($_SESSION["nome"], $_SESSION["sobrenome"], $_SESSION["datadenascimento"], 
                                 $_SESSION["telefone"], $_SESSION["cpf"],$_SESSION["sexo"]);
    
    echo $banco->InserirConta($_SESSION["email"], $cadastrar->getsenha());
    
   echo $banco->InserirEndereco($_SESSION["rua"], $_SESSION["cep"],$_SESSION["numero"],
                                  $_SESSION["cidade"], $_SESSION["estado"],
                                    $_SESSION["bairro"], $_SESSION["complemento"],$_SESSION["email"]);
    
   // session_destroy();
    //Temporario
   // header("Location: ../View/Banco-cadastrar-conta.html");

?>