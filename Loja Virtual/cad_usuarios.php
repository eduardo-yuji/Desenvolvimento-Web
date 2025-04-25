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
?>

<form name="frm" action="sql_cad_usuarios.php" method="post" onsubmit="return valida();"><br>
Login:. <input type="text" name="txtlogin" size="10" maxlength="10"><br>
Senha:. <input type="password" name="txtsenha" size="10" maxlength="10"><br>
E-mail:. <input type="text" name="txtemail" size="20" maxlength="50"><br>
<input type="submit"  value="CADASTRAR">&nbsp;<input type="reset" value="LIMPAR"><br><br>
</form>
</body>
</html>