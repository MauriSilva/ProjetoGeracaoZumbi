<?php
include("header.php");

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
        <div class="box-contact">
            <div class="contact-text1">
               <div class="faleConosco">FALE CONOSCO</div>
               <p class="textContact"> deixe sua mensagem ao lado ou nos procure nas redes:</p>
               <div class="iconsText">
                   <i class="icon"><img src="src/twitterIcon.png" alt=""></i><span>@geracaozumbi_podcast</span>
                </div> 
                
                <div class="iconsText"><i class="icon"><img src="src/faceIcon.png" alt=""></i><span>/podcastgeracaozumbi</span>
                </div>
                <div class="iconsText">
                <i class="icon"><img src="src/instagramIcon.png" alt=""></i><span>@geracaozumbi_pod</span>
            </div>
            </div>

            <div class="contact-text">
                <form method="post" class="formularioContato">
                    <span class="label">Nome:</span> <br> <input type="text" class="textbox"><br>
                    <span class="label">E-mail:</span> <br> <input type="text" class="textbox"><br>
                    <span class="label">Mensagem:</span> <br> <textarea class="textbox"></textarea>
                    <input type="submit" class="enviar">
                </form>
            </div>
        </div>
        <div id="footer">Copyright© 2024</div>
    </div>
</body>
</html>