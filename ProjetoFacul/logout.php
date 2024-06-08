<?php
session_start(); // Inicia a sessão
session_destroy(); // Destroi todas as sessões
header("Location: index.php"); // Redireciona para a página de login
exit();
