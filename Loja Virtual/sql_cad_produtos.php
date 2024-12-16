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

?>