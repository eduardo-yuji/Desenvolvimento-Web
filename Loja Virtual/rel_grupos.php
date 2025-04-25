<?php
<<<<<<< HEAD
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
=======
include 'bd.php';
//criando a query de consulta à tabela criada
$sql = mysqli_query($strcon, "SELECT * FROM grupos") or die(mysqli_error($cx) //caso haja um erro na consulta
);

?>
<table border="1px">
    <tr>
        <td>Nome Grupo</td>
        <td>Cor Grupo</td>
        <td>Situação Grupo</td>
    </tr>
    <?php
    //pecorrendo os registros da consulta.
    while ($aux = mysqli_fetch_assoc($sql)) { ?>
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb
        <tr>
            <td><?php echo $aux["nomegrupo"]; ?></td>
            <td><?php echo $aux["corgrupo"]; ?></td>
            <td><?php echo $aux["situacaogrupo"]; ?></td>
<<<<<<< HEAD
        </tr><?php
    }?>
    </tbody>
=======

        </tr>

    <?php
    }

    ?>
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb
</table>