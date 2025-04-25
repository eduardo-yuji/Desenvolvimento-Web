<?php
session_start();
session_destroy(); // Destroi a sessão
header("Location: index.html"); // Redireciona para o login
exit;
?>