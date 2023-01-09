<?php

require_once("config.php");
//carrega um usuario
//$root = new Usuario;
//$root -> loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando um login e senha
$usuario = new Usuario();

$usuario->login("user", "12345");

echo $usuario;


?>