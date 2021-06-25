<?php

require_once("config.php");

// carrega apenas 1 usuário.
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários.
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo Login.
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carregar usuário usando o login e a senha.
//$usuario = new Usuario();
//$usuario->login("Igor","1234");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("jozezinho", "44444");
//$aluno->insert();
//echo $aluno;


//FAZENDO UPDATE

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;



?>