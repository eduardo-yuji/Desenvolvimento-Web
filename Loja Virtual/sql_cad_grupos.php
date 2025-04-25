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

$nome1 = $_POST['txtnome'];
$cor = $_POST['cbocor'];
$situacao = $_POST['cbosituacao'];

//  connection bd
include 'conexao.php';
   
$sql = "INSERT INTO grupos (nomegrupo, corgrupo, situacaogrupo) VALUES ('$nome1', '$cor','$situacao')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "grupo cadastrado com sucesso!";
?>