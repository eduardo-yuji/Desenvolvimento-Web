<?php

$idgrupo = $_POST['cbogrupo'];


include 'bd.php';

$sql = "delete from grupos where idgrupo='$idgrupo'";
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Grupo excluido com sucesso!";
?>

<br><a href="menu.php">Voltar</a><br><br>