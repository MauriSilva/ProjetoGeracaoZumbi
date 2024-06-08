<?php
include("header.php");

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geração Zumbi</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div id="container">
        <div class="box-content">
            <div class="header-img">
                <!-- <img src="src/LOGIN.png" alt=""> -->
            </div>
                <div class="episodios"></div>
                    <div class="content">
                        <div class="content-title">ÚLTIMOS EPISODIOS</div>
                        <div class="ep-block">
                            <img class="img-ep-index" src="src/ep1.png" alt="">
                            <p class="img-text"> Oscar 2024</p> 
                        </div>
                        
                        <div class="ep-block">
                            <img class="img-ep-index" src="src/ep2.png" alt="">
                            <p class="img-text">Oscar 2024</p> 
                        </div>

                        <div class="ep-block">
                            <img class="img-ep-index" src="src/ep3.png" alt="">
                            <p class="img-text">Oscar 2024</p> 
                        </div>

                        <div class="ep-block">
                            <img class="img-ep-index" src="src/ep4.png" alt="">
                            <p class="img-text">Oscar 2024</p> 
                        </div>
                </div>
                <div id="footer">Copyright© 2024</div>
            </div>
        </div>
    </div>
</body>
</html>