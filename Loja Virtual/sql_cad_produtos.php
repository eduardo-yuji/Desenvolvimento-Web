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

$idgrupo = $_POST['cbogrupo'];
$nomeproduto = $_POST['txtnome'];
$precoproduto = $_POST['txtpreco'];
$descontoproduto = $_POST['txtdesconto'];
$descricaoproduto = $_POST['txtdescricao'];
$situacaoproduto = $_POST['cbosituacao'];
$fotoproduto = $_POST['txtfoto'];
$fornecedorproduto = $_POST['txtfornecedor'];

//  connection bd
include 'conexao.php';
   
$sql = "INSERT INTO produtos (idgrupo, nomeproduto, precoproduto, descontoproduto, descricaoproduto, situacaoproduto, fotoproduto, fornecedorproduto) 
VALUES ('$idgrupo', '$nomeproduto','$precoproduto', '$descontoproduto', '$descricaoproduto', '$situacaoproduto', '$fotoproduto', '$fornecedorproduto')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "produto cadastrado com sucesso!";
?>