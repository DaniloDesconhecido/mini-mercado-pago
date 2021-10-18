<?php 
    class CadastrarDAO{

        private String $nome;
        private String $sobrenome;
        private String $datadenascimento;
        private String $email;
        private int $telefone;
        private int $cpf; 
        private String $sexo;
        private String $rua; 
        private int $cep;
        private int $numero;
        private String $cidade;
        private String $estado;
        private String $bairro;
        private String $complemento;
        private String $senha; 

        public function getnome() {
            return $this->nome;
        }

        public function setnome($nome) {
            $this->nome = $nome;
        }

        public function getsobrenome() {
            return $this->sobrenome;
        }

        public function setsobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        public function getdatadenascimento() {
            return $this->datadenascimento;
        }

        public function setdatadenascimento($datadenascimento) {
            $this->datadenascimento = $datadenascimento;
        }

        public function getemail() {
            return $this->email;
        }

        public function setemail($email) {
            $this->email = $email;
        }

        public function gettelefone() {
            return $this->telefone;
        }

        public function settelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function getcpf() {
            return $this->cpf;
        }

        public function setcpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getsexo() {
            return $this->sexo;
        }

        public function setsexo($sexo) {
            $this->sexo = $sexo;
        }

        public function getrua() {
            return $this->rua;
        }

        public function setrua($rua) {
            $this->rua = $rua;
        }
        
        public function getcep() {
            return $this->cep;
        }

        public function setcep($cep) {
            $this->cep = $cep;
        }

        public function getnumero() {
            return $this->numero;
        }

        public function setnumero($numero) {
            $this->numero = $numero;
        }

        public function getcidade() {
            return $this->cidade;
        }

        public function setcidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getestado() {
            return $this->estado;
        }

        public function setestado($estado) {
            $this->estado = $estado;
        }

        public function getbairro() {
            return $this->bairro;
        }

        public function setbairro($bairro) {
            $this->bairro = $bairro;
        }

        public function getcomplemento() {
            return $this->complemento;
        }

        public function setcomplemento($complemento) {
            $this->complemento = $complemento;
        }

        public function getsenha() {
            return $this->senha;
        }

        public function setsenha($senha) {
            $senha = sha1($senha);
            $this->senha = $senha;
        }

    }
?>