<?php
// verificar sessao  if session ("adm")<>"ativo" then
//   redirecionar para login
// else 

$idusuario = $_POST['cbousuario'];

//  connection bd
include 'bd.php';

$sql = "delete from usuarios where idusuario='$idusuario'";
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Usuário excluido com sucesso!";
?>

<br><a href="menu.php">Voltar</a><br><br>