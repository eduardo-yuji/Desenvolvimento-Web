<?php
<<<<<<< HEAD:Loja Virtual/cad_produtos.php
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
  
// Create connection
 include 'conexao.php';
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($strcon, "SELECT * FROM grupos") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
=======
//if session ("adm") <> "ativo" then
//   response.redirect "default.asp"
//else
//  connection bd


// Create connection
include 'bd.php';

//criando a query de consulta à tabela criada 
$sql = mysqli_query($strcon, "SELECT * FROM grupos") or die(mysqli_error($cx) //caso haja um erro na consulta 
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/cad_produtos.php
);
// abaixo tem-se o combo-box (tag select, que carrega os dados diretamente do banco de dados)
?>

CADASTRO DE PRODUTOS
<<<<<<< HEAD:Loja Virtual/cad_produtos.php
<form  action="sql_cad_produtos.php" method="post"> <br>
Grupos:.<select name="cbogrupo">
  <option> Selecione </option>
<?php 
// a primeira opção do combo-box (Selecione) é estática, já o restante dos itens é dinamico
// ou seja, carrega os registros da tabela Grupos, veja a estrutura de repetição While abaixo
     while ($aux = mysqli_fetch_assoc ($sql)){ ?>
    <option value="<?php echo $aux['idgrupo']; ?>"><?php echo $aux['nomegrupo']; ?>
    </option> <?php
    // aqui finaliza o carregamento de 1 item, caso tenha mais itens na tabela grupos,
    // será carregado utilizando a instrução das linha acima (option value...).
      }
  ?>
 </select><br><br>
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
=======
<form action="sql_cad_produtos.php" method="post"> <br>
  Grupos:.<select name="cbogrupo">
    <option> Selecione </option>
    <?php
    // a primeira opção do combo-box (Selecione) é estática, já o restante dos itens é dinamico
    // ou seja, carrega os registros da tabela Grupos, veja a estrutura de repetição While abaixo
    while ($aux = mysqli_fetch_assoc($sql)) { ?>
      <option value="<?php echo $aux['idgrupo']; ?>"><?php echo $aux['nomegrupo']; ?>
      </option> <?php
                // aqui finaliza o carregamento de 1 item, caso tenha mais itens na tabela grupos,
                // será carregado utilizando a instrução das linha acima (option value...).
              }
                ?>
  </select><br><br>
  Nome:. <Input type="text" name="txtnome" size="20" maxlength="50"><br>
  Preço:. <input type="text" name="txtpreco" size="10" maxlength="20"><br>
  Desconto:. <input type="text" name="txtdesconto" size="10" maxlength="20"><br>
  Descrição:. <textarea name="txtdescricao" cols="30" rows="5"></textarea><br>
  Situação:. <select name="cbosituacao">
    <option value="A">Ativo</option>
    <option value="B">Bloqueado</option>
  </select><br>
  Foto:. <input type="text" name="txtfoto"><br>
  Fornecedor:. <input type="text" name="txtfornecedor"> <br>
  <input type="submit" value="CADASTRAR"> <br><br>
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb:Loja Virtual/Cadastro/cad_produtos.php
</form>