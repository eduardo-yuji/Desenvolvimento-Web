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

include 'conexao.php';

//criando a query de consulta à tabela criada
$sql = mysqli_query($strcon, "SELECT * FROM grupos") or die(mysqli_error($cx)); //caso haja um erro na consulta

//pecorrendo os registros da consulta.
?>
<table border="1px">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Cor</td>
            <td>Situacao</td>
        </tr>
    </thead>
    <tbody>
<?php while($aux = mysqli_fetch_assoc($sql)) { ?>
        <tr>
            <td><?php echo $aux["nomegrupo"]; ?></td>
            <td><?php echo $aux["corgrupo"]; ?></td>
            <td><?php echo $aux["situacaogrupo"]; ?></td>
        </tr><?php
    }?>
    </tbody>
</table>