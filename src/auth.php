<?php
require_once 'usuarios.php';
$u = new Usuario;
session_start();

if(isset($_POST['email']))
{

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    
    if(!empty($email) && !empty($senha))
    {
        $u->conectar("prova2php", "mysql", "root", "qaz@123");
        if($u->msgErro == "")
        {
            if($u->logar($email, $senha))
            {
                $_SESSION['id_usuario'] = true;
                header("location: egressos.php");
            }
            else
            {
            header("Location: index.php?msg-erro=Email e/ou senha inválidos!");
            }

        }
        else
        {
            header("Location: index.php?msg-erro=" .$u->msgErro);
        }
        
        
    }
    else
    {
        header("Location: index.php?msg-erro=Preencha todos os campos!");
    }
}
?>