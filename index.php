<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ");


echo json_encode($usuarios);*/


//   carrega um usuario 
/*$user = new Usuario();

$user->loadbyId(4); 
 echo $user;*/



 //careega uma lista de usuario

 /*$lista = Usuario::getList();

 echo json_encode($lista);*/




 //carrega uma lista de usuario buscando pelo login


 /*$search = Usuario::search("Ro");
 echo json_encode($search);*/


//carrega um usuario usando ologin e a senha

/* $usuario = new Usuario();
 $usuario->login("Roberto","00002446556");

 echo $usuario;*/


 //inserir usuario

/*$aluno =  new Usuario();

 $aluno->setDeslogin("aluno");
 $aluno->setDessenha("@fsta");


 $aluno->insert();



 echo $aluno;*/



 //update
 $usuario = new Usuario();

 $usuario->loadById(4);

 $usuario->update("Resende","@wewirwirwiru");


 echo $usuario;


















?>