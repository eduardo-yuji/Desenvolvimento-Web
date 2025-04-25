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


$idproduto = $_POST['cboproduto'];


//  connection bd
include 'conexao.php';
 
$sql = "delete from produtos where idproduto='$idproduto'";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Produto excluido com sucesso!";

?>