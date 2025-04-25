<?php
<<<<<<< HEAD
session_start();
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

include 'conexao.php';

$sql = "SELECT * FROM usuarios WHERE loginusuario='$usuario' and senhausuario='$senha'";
$resultado =  mysqli_query($strcon,$sql);
$dados = mysqli_fetch_array($resultado);
$total = mysqli_num_rows($resultado);

if($total){
    if (!strcmp($senha, $dados["senhausuario"])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $usuario;
        header('Location: menu.php');
    }
}else{
	echo "O login fornecido por você é inexistente!";
=======
$loginusuario = $_POST["loginusuario"];
$senhausuario = $_POST["senhausuario"];
$query = "SELECT * FROM usuarios WHERE loginusuario='$loginusuario' and senhausuario='$senhausuario'";
$conexao = new PDO('mysql:host=127.0.0.1;port=3307;dbname=trab2', 'root', '');
$resultado = $conexao->query($query);
$logado = $resultado->fetch();

if ($logado == null) {
    // Usuário ou senha inválida
    //header('Location: usuario-erro.php');
    echo "usuario ou senha invalidos ";
} else {

    // Direciona o usuário para o pagina painel.php 
    header('Location: menu.php');
    //header('Location: painel.php');
    echo "usuario validado com sucesso ";
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb
}

$strcon->close();
?>