<?php
//if session ("adm") <> "ativo" then
    // encaminhar para login
//else

//  connection bd
include 'bd.php';
?>

CADASTRO DE PRODUTOS
<form  action="sql_cad_produtos.php" method="post">

Grupo Produto:  <Input type="text" name="cbogrupo" size="20" maxlength="50"><br>
Nome:.      <Input type="text" name="txtnome" size="20" maxlength="50"><br>
Preço:.     <input type="text" name="txtpreco" size="10" maxlength="20"><br>
Desconto:.  <input type="text" name="txtdesconto" size="10" maxlength="20"><br>
Descrição:. <textarea name="txtdescricao" cols="30" rows="5"></textarea><br>
Situação:.  <select name="cbosituacao">
              <option value="A">Ativo</option>
              <option value="B">Bloqueado</option>
                </select><br>
Foto:.      <input type="text" name="txtfoto" ><br>
Fornecedor:. <input type="text" name="txtfornecedor"> <br>
<input type="submit"  value="CADASTRAR"> <br><br>
</form>
