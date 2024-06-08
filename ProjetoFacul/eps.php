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
        <div class="search">
            <img src="src/search-12-32.png" alt="">
            <input type="text" class="searchbar" placeholder="Busca">
        </div>

        <div class="container-eps">
            <div class="box-eps">
            
            <div class="ep-block">
                <img class="img-ep" src="src/ep1.png" alt="">
                <p class="img-text-ep"> Oscar 2024</p> 
            </div>

            <div class="ep-block">
                <img class="img-ep" src="src/ep2.png" alt="">
                <p class="img-text-ep"> Influencia da IA na educação</p> 
            </div>

            <div class="ep-block">
                <img class="img-ep" src="src/ep3.png" alt="">
                <p class="img-text-ep"> Saúde mental na internet</p> 
            </div>

            <div class="ep-block">
                <img class="img-ep" src="src/ep4.png" alt="">
                <p class="img-text-ep"> Indústria Musical</p> 
            </div>
        </div>    

        <div class="box-eps">
            
            <div class="ep-block">
                <img class="img-ep" src="src/ep1.png" alt="">
                <p class="img-text-ep"> Oscar 2024</p> 
            </div>

            <div class="ep-block">
                <img class="img-ep" src="src/ep2.png" alt="">
                <p class="img-text-ep"> Influencia da IA na educação</p> 
            </div>

            <div class="ep-block">
                <img class="img-ep" src="src/ep3.png" alt="">
                <p class="img-text-ep"> Saúde mental na internet</p> 
            </div>

            <div class="ep-block">
                <img class="img-ep" src="src/ep4.png" alt="">
                <p class="img-text-ep"> Indústria Musical</p> 
            </div>
        </div>    
    </div>
        </div>
    </div>
</body>
</html>