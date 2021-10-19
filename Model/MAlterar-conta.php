<?php

    require_once "conexao.php";

    class MAlterarconta{

        public function AlterarEmail($email = "dd@gmail.com",$novoemail ="vdd@gmail.com"){
            try {
                $sql = "UPDATE conta SET email = :novoemail WHERE email = :email";
        
                $p_sql = Conexao::getInstance()->prepare($sql);
        
                $p_sql->bindValue(":novoemail", $novoemail);                
                $p_sql->bindValue(":email", $email);
                
                return $p_sql->execute();     
                
                
                } catch (PDOException $erro) {
                    echo "Erro na conexão:" . $erro->getMessage();             
                }
        }

        public function AlterarSenha($email="vdd@gmail.com",$senha =12344){
            try {
                $sql = "UPDATE conta SET senha = :senha WHERE email = :email";
        
                $p_sql = Conexao::getInstance()->prepare($sql);
        
                $p_sql->bindValue(":senha", $senha);                
                $p_sql->bindValue(":email", $email);
                
                return $p_sql->execute();     
                
                
                } catch (PDOException $erro) {
                    echo "Erro na conexão:" . $erro->getMessage();             
                }
        }

        public function AlterarUsuario(){

        }
        
    }    
?>