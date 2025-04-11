<?php
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
</table>