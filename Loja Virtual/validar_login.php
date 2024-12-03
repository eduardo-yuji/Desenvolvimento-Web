<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$query = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
$conexao = new PDO('mysql:host=127.0.0.1;port=3307;dbname=trab2', 'root', '');
$resultado = $conexao->query($query);
$logado = $resultado->fetch();

if ($logado == null) {
    // Usuário ou senha inválida
    header('Location: usuario-erro.php');
    echo "usuario ou senha invalidos ";
} else {

    // Direciona o usuário para o pagina painel.php 
    header('Location: painel.php');
    echo "usuario validado com sucesso ";
}
die();
