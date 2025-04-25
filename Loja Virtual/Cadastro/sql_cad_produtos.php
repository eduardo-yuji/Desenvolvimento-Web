<<<<<<< HEAD:Loja Virtual/sql_cad_produtos.php
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
=======
<?php
// verificar sessão adm 
//if session ("adm") <> "ativo" then
    // encaminhar para login
//else

$nome = $_POST['txtnome'];
$preco = $_POST['txtpreco'];
$desconto = $_POST['txtdesconto'];
$descricao = $_POST['txtdescricao'];
$situacao = $_POST['cbosituacao'];
$foto = $_POST['txtfoto'];
$fornecedor = $_POST['txtfornecedor'];


//  connection bd
include 'bd.php';
 
$sql = "INSERT INTO produtos (nomeproduto, precoproduto, descontoproduto, descricaoproduto, situacaoproduto, fotoproduto, fornecedorproduto) VALUES ('$nome', '$preco','$desconto', '$descricao', '$situacao', '$foto', '$fornecedor')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Produto cadastrado com sucesso!";

>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/sql_cad_produtos.php
?>