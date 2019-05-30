<?php
    
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Projeto Login</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<div id="corpo-form">
    <h1>Entrar</h1>
    <form method="post" action="auth.php">
        <input type="email" name="email" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Entrar">
        <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>


    </form>
</div>



</body>

</html>