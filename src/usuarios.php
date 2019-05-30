<?php

Class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        try{
            $dsn = "mysql:dbname=".$nome.";host=".$host;
            $this->pdo = new PDO($dsn, $usuario, $senha);
        } catch (PDOException $e) {
            $this->msgErro = $e->getMessage();
        }
        
        

    }

    public function cadastrar($nome, $email, $senha)
    {
        //verificar se já existe o email cadastrado
        $sql = $this->pdo->prepare("SELECT codigo FROM USUARIO WHERE email = :e");
        $sql->bindValue(":e", $email);
        //$sql->bindValue(':e', $email, PDO::PARAM_STR);
        
        
        
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; // já está cadastrada
        }
        else
        {
            //caso não, Cadastrar
            $sql = $this->pdo->prepare("INSERT INTO USUARIO (nome, email, senha) VALUES (:n, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", $senha);
            $sql->execute();
            return true;

        }
        

    }

    public function logar($email, $senha)
    {
        
        //verificar se o email e senha estão cadastrados, se sim
        $sql = $this->pdo->prepare("SELECT codigo FROM USUARIO WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();
        if($sql->rowCount() > 0) {
            //entrar no sistema (sessão)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['codigo'];
            return true; //logado com sucesso
        }
        else{
            return false; //não foi possivel logar  
        }
        

    }

}



?>