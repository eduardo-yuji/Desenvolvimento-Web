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
$sql = mysqli_query($strcon, "SELECT * FROM usuarios") or die(mysqli_error($cx)); //caso haja um erro na consulta

//pecorrendo os registros da consulta.
?>
<table border="1px">
    <thead>
        <tr>
            <td>Usuario</td>
            <td>Senha</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
<?php while($aux = mysqli_fetch_assoc($sql)) { ?>
        <tr>
            <td><?php echo $aux["loginusuario"]; ?></td>
            <td><?php echo $aux["senhausuario"]; ?></td>
            <td><?php echo $aux["emailusuario"]; ?></td>
        </tr><?php
    }?>
    </tbody>
=======
//  connection bd
include 'bd.php';

//criando a query de consulta à tabela criada
$sql = mysqli_query($strcon, "SELECT * FROM usuarios") or die(mysqli_error($cx) //caso haja um erro na consulta
);

?>
<table border="1px">
    <tr>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Senha</td>
    </tr>
    <?php
    //pecorrendo os registros da consulta.
    while ($aux = mysqli_fetch_assoc($sql)) { ?>
        <tr>
            <td><?php echo $aux["loginusuario"]; ?></td>
            <td><?php echo $aux["emailusuario"]; ?></td>
            <td><?php echo $aux["senhausuario"]; ?></td>
        </tr>

    <?php
    }

    ?>
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb
</table>