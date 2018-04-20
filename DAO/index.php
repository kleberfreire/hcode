<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//---carrega 1 usuario---
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//---carregar uma lista de usuarios---
//$lista = Usuario::getList();
//echo json_encode($lista);

//---carregar uma lista  de usuarios buscando pelo $login---
//$search = Usuario::search("k");
//echo json_encode($search);

//---carregar um usuario usando login e a senha---
//$usuario = new Usuario();
//$usuario->login("teste", "21345");
//echo $usuario;
/*
--- insert login e senha ---
$aluno = new Usuario("aluno", "@aluno");
$aluno->insert();
echo $aluno;
*/

/*
---altenrando usuario---
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("professor", "321654");
echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(20);

$usuario->delete();

echo $usuario;

?>