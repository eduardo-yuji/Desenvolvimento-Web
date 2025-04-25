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

<b>CADASTROS</b><BR><br>

<<<<<<< HEAD
<a href="cad_usuarios.php">Usuários</a><br>
<a href="cad_grupos.php">Grupos</a><br>
<a href="cad_produtos.php">Produtos</a><br><br><br>
=======
<a href="Cadastro/cad_usuarios.php">Usuários</a><br>
<a href="Cadastro/cad_grupos.php">Grupos</a><br>
<a href="Cadastro/cad_produtos.php">Produtos</a><br><br><br>
>>>>>>> 0f3b35b788358d73fa644c4e54a6f6eef7e9f7fb

<b>EXCLUSÕES</b><BR><BR>

<a href="Delete/del_usuarios.php">Usuários</a><br>
<a href="Delete/del_grupos.php">Grupos</a><br>
<a href="Delete/del_produtos.php">Produtos</a><br><br><br>

<b>RELATÓRIOS</b><BR><BR>

<a href="rel_usuarios.php">Usuários</a><br>
<a href="rel_grupos.php">Grupos</a><br>
<a href="rel_produtos.php">Produtos</a><br>

<a href="rel_grupos_bloq.php">Grupos bloqueados</a><br>
<a href="rel_produtos_bloq.php">Produtos bloqueados</a><br>

<a href="rel_grupos_ativos.php">Grupos Ativos</a><br>
<a href="rel_produtos_ativos.php">Produtos ativos</a><br>

<a href="rel_produtos_grupo.php">Produtos por grupo</a><br>
<a href="rel_clientes.php">Clientes</a><br>
<a href="rel_pedidos.php">Pedidos</a><br><br><br>

<a href="logout.php">Sair</a>
<?php
//end if ?>