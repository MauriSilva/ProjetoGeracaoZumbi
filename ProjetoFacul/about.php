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
        
            <div class="box-about">
            
                <div class="divSobre"><p class="sobre">SOBRE</p></div>

                <div class="about-text">
                    <img class="img-about" src="src/quemsomos.jpg" alt="">
                    <p class="text-about1">Bem vindo a Geração Zumbi, um podcast
                        vibrante e diversificado, conduzido por um
                        grupo de jovens da geracao Z. Aqui 
                        exploraremos com paixao e entusiasmo uma
                        ampla gama de topicos, desde os eventos 
                        mais recenter ate os lancementos mais
                        quentes da cultura pop, tecnologia e artes.
                    </p>

                </div>

                <div class="about-text">

                    <img class="img-about2" src="src/quemsomos2.jpg" alt="">
                    <p class="text-about2">Nascidos na era digital, trazemos uma perspectiva única para os assuntos do momento, desafiando conceitos e compartilhando nossas opiniõs de forma autêntica. Acreditamos no poder da conexão e na importância de promover discussões significativas.</p>
                </div>
                
                <div id="footer-about">Se você é curioso, antenado e ávido por descobrir o que há de mais emocionante no mundo comtemporâneo, junte-se a nós na Geração Zumbi. Aqui a conversa é sempre dinâmica e o aprendizado é constante. Estamos ansiosos para explorar junto com você o universo fascinante que nos cerca!</div>
            </div>
        </div>
    </div>
</body>
</html>