<<<<<<< HEAD:Loja Virtual/sql_cad_grupos.php
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
=======
<?php
//<--#include file="bd.php"-->
// verificar sessão adm 
//if session ("adm") <> "ativo" then
    // encaminhar para login
//else

$nome1 = $_POST['txtnome'];
$cor = $_POST['cbocor'];
$situacao = $_POST['cbosituacao'];

//  connection bd
include 'bd.php';
   
$sql = "INSERT INTO grupos (nomegrupo, corgrupo, situacaogrupo) VALUES ('$nome1', '$cor','$situacao')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "grupo cadastrado com sucesso!";
echo "<br><a href='index.html'>Clique aqui para pagina principal</a><br>";
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/sql_cad_grupos.php
?>