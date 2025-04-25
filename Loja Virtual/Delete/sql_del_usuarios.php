<<<<<<< HEAD:Loja Virtual/sql_del_usuarios.php
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
=======
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
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Delete/sql_del_usuarios.php
