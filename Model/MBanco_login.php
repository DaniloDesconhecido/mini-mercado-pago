<?php
    require_once "conexao.php";
    class BancoLogin{
        
        public function verificarLogin($email,$senha){
            try {
                $sql = "SELECT email,senha FROM conta WHERE email =:email AND senha = :senha ";
        
                $p_sql = Conexao::getInstance()->prepare($sql);
        
                $p_sql->bindValue(":email", $email);                
                $p_sql->bindValue(":senha", $senha);
                $p_sql->execute();
                $result =$p_sql->fetch(\PDO::FETCH_ASSOC);

                if($result > 0){
                    return "Login Correto";
                }else{                    
                    return "Email ou senha incorreta";
                }
                                
                } catch (PDOException $erro) {
                    return "Erro na conexão:" . $erro->getMessage();             
                }
        }
    }
?>