<?php
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
        <tr>
            <td><?php echo $aux["nomegrupo"]; ?></td>
            <td><?php echo $aux["corgrupo"]; ?></td>
            <td><?php echo $aux["situacaogrupo"]; ?></td>

        </tr>

    <?php
    }

    ?>
</table>