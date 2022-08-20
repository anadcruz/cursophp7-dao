<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","123456");

//echo $usuario;

/*$aluno = new Usuario("aluno", "@lun0");

//criando um novo usuário
$aluno->insert();

echo $aluno;
*/

/*
//Alterar um usuário
$usuario= new Usuario();

$usuario->loadbyId(8);

$usuario->update("professor", "!@#$%¨&*");
echo $usuário;
*/

$usuario= new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;
