<?php
// recuperando dados do formulario
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
// variáveis ref. A conexão ao bd
$servername = "localhost";
$username = "seu usuario bd";
$password = "sua senha";
$dbname = "nome da bd";
// criando a string de Conexao com o BD
$strcon = mysqli_connect($servername, $username, $password,
$dbname, 3306) or die('Erro ao conectar ao banco de dados');
// criação da Instrução SQL DML para inserção dos dados
$sql = "INSERT INTO aluno (nome, telefone) VALUES ('$nome',
'$telefone')";
// execução da instrução SQL DML de Insert
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar no
BD");
// fechamento da conexão com o bd.
mysqli_close($strcon);
echo "aluno cadastrado com sucesso!";
?>