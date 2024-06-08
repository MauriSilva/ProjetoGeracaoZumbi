<?php
session_start();
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
        <header>
            <ul class="headerList">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="eps.php">Episodios</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <?php echo htmlspecialchars($_SESSION['login']); ?>
                    <?php endif; ?>
                </li>
                <li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <a href="logout.php" class="btn-login">logout</a>
                    <?php else: ?>
                        <a href="login.php" class="btn-login">login</a>
                    <?php endif; ?>
            
                </li>
            </ul>
        </header>
    </div>
</body>