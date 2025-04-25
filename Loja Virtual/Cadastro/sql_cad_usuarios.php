<?php
<<<<<<< HEAD:Loja Virtual/sql_cad_usuarios.php
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

=======
// verificar sessão adm 
//if session ("adm") <> "ativo" then
    // encaminhar para login
//else
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/sql_cad_usuarios.php

$login = $_POST['txtlogin'];
$senha = $_POST['txtsenha'];
$email = $_POST['txtemail'];


//  connection bd
<<<<<<< HEAD:Loja Virtual/sql_cad_usuarios.php
include 'conexao.php';
=======
include 'bd.php';
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/sql_cad_usuarios.php
 
$sql = "INSERT INTO usuarios (loginusuario, senhausuario, emailusuario) VALUES ('$login', '$senha','$email')";

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Usuário cadastrado com sucesso!";

<<<<<<< HEAD:Loja Virtual/sql_cad_usuarios.php
?>
=======
?><br><br>
<a href="Index.html"> Página inicial </a><br><br>
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/sql_cad_usuarios.php
