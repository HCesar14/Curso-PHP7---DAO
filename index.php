<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("select * from usuarios");

echo json_encode($usuarios);

$usuario = new Usuario();

$usuario->loadById(1);

echo $usuario*/

//carrega lista de ususarios
/*$lista = Usuario::getList(); //pelo metodo ser estatico nao é preciso instanciar a clase usuario entao ja pode chamar o metodo de uma vez atraves do ::

echo json_encode($lista);*/

//carrega lista de usuarios pelo login

/*$busca = Usuario::search("e");

echo json_encode($busca);*/

//valida login e senha
/*
$usuario = new Usuario();
$usuario->login("henriquecesar14","7412");

echo $usuario;*/
/*
//inserir novo usuario
$usuario = new Usuario();
$usuario->setDeslogin("teste3");
$usuario->setDessenha("teste3");

$usuario->insert();

echo $usuario;*/

//atualizar usuario
/*$usuario = new Usuario();

$usuario->loadById(1);

$usuario->update("professor","asdfa");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(2);
$usuario->delete();

echo $usuario;

?>