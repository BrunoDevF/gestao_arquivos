<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça login com sua conta</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./Gestao/assets/css/main.css">
</head>
<body>
<?php
    if(isset($_POST['logar'])){
        $nome = $_POST['name'];
        $senha = $_POST['password'];

        $sql = Mysql::conectar()->prepare("SELECT * FROM `usuarios` WHERE nome = ? AND senha = ?");
        $sql->execute(array($nome, $senha));
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            echo 'logado';
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['senha'] = $info['senha'];
            Gestao::redirect(MAIN);
        }
    }
?>

<div class="center-all">
    <form action="" method="post">
        <label for="">Nome: </label>
        <input type="text" name="name">
        <label for="">Senha: </label>
        <input type="password" name="password">

        <input type="submit" name="logar" value="Entrar">
    </form>
</div>    
</body>
</html>
<?php
    Mysql::conectar();
?>