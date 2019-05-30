<?php
    require_once 'usuarios.php';
    $u = new Usuario;
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Projeto Login</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<div id="corpo-form">
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
        <input type="email" name="email" placeholder="Usuário" maxlength="50">
        <input type="password" name="senha" placeholder="Senha" maxlength="10">
        <input type="password" name="confsenha" placeholder="Confirmar Senha" maxlength="10">
        <input type="submit" value="Cadastrar">
        

    </form>
</div>

<?php
//verificar se a pessoa clicou no botão
if(isset($_POST['nome']))
{

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confsenha']);
    //verificar se está preenchido 
    if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("prova2php", "mysql", "root", "qaz@123");
        if($u->msgErro == "")//tudo certo
        {
            if($senha == $confirmarSenha)
            {
                if($u->cadastrar($nome, $email, $senha, $confirmarSenha))
                {
                    ?>
                    <div id="msg-sucesso"> 
                    Cadastrado com sucesso! Acesse para entrar!
                    </div>
                    
                    <?php
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                    Email já cadastrado!
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div class="msg-erro">
                Senhas não correspondem!
                </div>
                <?php
            }
        }
        else
        {
            ?>
            <div class="msg-erro">
            <?php echo "Erro: ".$u->msgErro;?>
            </div>
            <?php
        }
    }
    else
    {
        ?>
        <div class="msg-erro">
        Preencha todos os campos!
        </div>
        <?php
    }
}
?>
</body>

</html>