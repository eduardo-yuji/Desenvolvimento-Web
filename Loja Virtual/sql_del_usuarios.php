<?php
// verificar sessao 
// if session ("adm")<>"ativo" then
// encaminha para login 
//else 
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header('Location: index.html'); // Redireciona para a página de login
    exit;
}

$idusuario = $_POST['cbousuario'];


//  connection bd
include 'conexao.php';
 
$sql = "delete from usuarios where idusuario='$idusuario'";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Usuário excluido com sucesso!";

?>