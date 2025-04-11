<?php

$idproduto = $_POST['cboproduto'];

include 'bd.php';

$sql = "delete from produtos where idproduto='$idproduto'";
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Produto excluido com sucesso!";
?>

<br><a href="menu.php">Voltar</a><br><br>