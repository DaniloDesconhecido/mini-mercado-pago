<?php
    session_start();
    require_once "../Model/MBanco-cadastrar-conta.php";
    require_once "../Model/MBanco-criar-senha.php";

    $cadastrar = new CadastrarDAO();
    $banco = new BancoLogin();

    $cadastrar->setsenha(filter_input(INPUT_POST,"senha", FILTER_SANITIZE_STRING));   
   
   $resul1 = $banco->InserirUsuario($_SESSION["nome"], $_SESSION["sobrenome"], $_SESSION["datadenascimento"], 
                                 $_SESSION["telefone"], $_SESSION["cpf"],$_SESSION["sexo"]);
    
    $resul2 = $banco->InserirConta($_SESSION["email"], $cadastrar->getsenha());
    
   $resul3 = $banco->InserirEndereco($_SESSION["rua"], $_SESSION["cep"],$_SESSION["numero"],
                                  $_SESSION["cidade"], $_SESSION["estado"],
                                    $_SESSION["bairro"], $_SESSION["complemento"],$_SESSION["email"]);
    
  session_destroy();
  
  if($resul1 == true && $resul2 == true && $resul3 == true){
    header("Location: ../index.html");
  }
  

?>