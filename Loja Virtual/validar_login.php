<?php
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
}

$strcon->close();
?>