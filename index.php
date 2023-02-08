<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="header">
        <div class="titulo"> <div class="login">Login</div></div>
    </div>
    <div class="form">
        <form action="inserir.php" method="post">
            Email<input type="email" name="email">
            Matrícula<input type="number" name="matricula">
            <input type="submit" name="btn" value="Logar">
        </form>
    </div>
</body>
</html>