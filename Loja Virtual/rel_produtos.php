<?php
include 'bd.php';
//criando a query de consulta à tabela criada
$sql = mysqli_query($strcon, "SELECT * FROM produtos") or die(mysqli_error($cx) //caso haja um erro na consulta
);

?>
<table border="1px">
    <tr>
        <td>Nome Produto</td>
        <td>Preço Produto</td>
        <td>Desconto Produto</td>
        <td>Descrição Produto</td>
        <td>Situação Produto</td>
        <td>Foto Produto</td>
        <td>Fornecedor Produto</td>

    </tr>
    <?php
    //pecorrendo os registros da consulta.
    while ($aux = mysqli_fetch_assoc($sql)) { ?>
        <tr>
            <td><?php echo $aux["nomeproduto"]; ?></td>
            <td><?php echo $aux["precoproduto"]; ?></td>
            <td><?php echo $aux["descontoproduto"]; ?></td>
            <td><?php echo $aux["descricaoproduto"]; ?></td>
            <td><?php echo $aux["situacaoproduto"]; ?></td>
            <td><?php echo $aux["fotoproduto"]; ?></td>
            <td><?php echo $aux["fornecedorproduto"]; ?></td>

        </tr>

    <?php
    }

    ?>
</table>