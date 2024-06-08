<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geração Zumbi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        
            <div id="box-sucesso">
            
                <p id="thankyou">Obrigado por se cadastrar. Você será redirecionado para a página inicial em alguns segundos.</p>
                    <script>
                        // Redireciona para a página inicial após alguns segundos
                        setTimeout(function() {
                            window.location.href = 'login.php';
                        }, 5000); // Redireciona após 5 segundos
                    </script>

            </div>
        </div>
    </div>
</body>
</html>