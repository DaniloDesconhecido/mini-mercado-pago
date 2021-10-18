<?php
    require_once("conexao.php");

    class BancoLogin{
        public function InserirUsuario($nome,$sobrenome,$datadenascimento,$telefone,$cpf,$sexo) {
            try {
                $sql = "INSERT INTO usuario (nome,datadenascimento,telefone,cpf,sexo,sobrenome) VALUES (:nome,:datadenascimento,:telefone,:cpf,:sexo,:sobrenome)";
        
                $p_sql = Conexao::getInstance()->prepare($sql);
        
                $p_sql->bindValue(":nome", $nome);                
                $p_sql->bindValue(":datadenascimento", $datadenascimento);
                $p_sql->bindValue(":telefone", $telefone);
                $p_sql->bindValue(":cpf", $cpf);
                $p_sql->bindValue(":sexo", $sexo);
                $p_sql->bindValue(":sobrenome", $sobrenome);                        
                
                
                return $p_sql->execute();     
                
                
                } catch (PDOException $erro) {
                    echo "Erro na conexão:" . $erro->getMessage();             
                }
            }

            public function InserirConta($email,$senha){
                try {
                    $sql = "INSERT INTO conta (email,senha,idusuario) VALUES (:email,:senha,last_insert_id());";
            
                    $p_sql = Conexao::getInstance()->prepare($sql);            
                    
                    $p_sql->bindValue(":email", $email);
                    $p_sql->bindValue(":senha", $senha);
                    
                    return $p_sql->execute();  
                    
                    } catch (PDOException $erro) {
                        echo "Erro na conexão:" . $erro->getMessage();             
                    }
            }

            public function InserirEndereco($rua,$cep,$numero,$cidade,$estado,$bairro,$complemento,$email){
                try {
                    $sql = "INSERT INTO endereco (numero,complemento,nomerua,cep,cidade,estado,bairro,idusuario) VALUES (:numero,:complemento,:nomerua,:cep,:cidade,:estado,:bairro,
                    (select idusuario from conta where email = :email));";
            
                    $p_sql = Conexao::getInstance()->prepare($sql);
            
                    $p_sql->bindValue(":numero", $numero);
                    $p_sql->bindValue(":complemento", $complemento);
                    $p_sql->bindValue(":nomerua", $rua);
                    $p_sql->bindValue(":cep", $cep);
                    $p_sql->bindValue(":cidade", $cidade);
                    $p_sql->bindValue(":estado", $estado);
                    $p_sql->bindValue(":bairro", $bairro);                
                    $p_sql->bindValue(":email", $email);  
                    
                    return $p_sql->execute();  
                    
                    } catch (PDOException $erro) {
                        echo "Erro na conexão:" . $erro->getMessage();             
                    }
            }
    } 
?>