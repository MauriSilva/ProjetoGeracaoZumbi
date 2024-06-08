<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geração Zumbi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="php" href="conexao.php">
</head>
<body>
    <div id="container">        
        <div class="box-login">
            <form method="POST" class="formLogin" action="cadastro.php">
                <span class="text-login">USUÁRIO:</span> <br>
                <input type="text" name="login"><br>
                <span class="text-login">SENHA:</span><br>
                <input type="password" name="senha"><br>
                <div class="buttonDiv"><button type="submit" class="submitButton">CADASTRE-SE</button></div>
                <div class="buttonDiv"><a href="" class="sejaMembro">JÁ TEM USUARIO? FAÇA LOGIN</a></div>
            </form>
        </div>
        <div id="footer">Copyright© 2024</div>
    </div>
</body>
</html>