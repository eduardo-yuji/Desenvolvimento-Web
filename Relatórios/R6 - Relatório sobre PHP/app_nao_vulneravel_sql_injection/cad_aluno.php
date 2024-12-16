<?php
// Recuperando dados do formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

// Variáveis de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_injection";

// Criando a conexão com o banco de dados
$strcon = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($strcon->connect_error) {
    die("Erro de conexão: " . $strcon->connect_error);
}

// Preparando a instrução SQL com placeholders
$sql = $strcon->prepare("INSERT INTO aluno (nome, telefone) VALUES (?, ?)");

// Associando os parâmetros à instrução preparada
$sql->bind_param("ss", $nome, $telefone); // "ss" indica dois parâmetros do tipo string

// Executando a instrução
if ($sql->execute()) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro ao tentar cadastrar no banco de dados: " . $sql->error;
}

// Fechando a instrução e a conexão
$sql->close();
$strcon->close();
?>