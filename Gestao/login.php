<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça login com sua conta</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nome: </label>
        <input type="text" name="name">
        <label for="">Senha: </label>
        <input type="password" name="password">

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
<?php
    Mysql::conectar();
?>