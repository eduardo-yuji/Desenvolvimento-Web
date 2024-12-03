<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trab2";

// Create connection
$strcon = mysqli_connect($servername, $username, $password, $dbname, 3307) or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('$usuario', '$senha')";
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Usuario cadastrado com sucesso!";
echo "<br><a href='index.html'>Clique aqui para pagina principal</a><br>";
