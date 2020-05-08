<?php

require_once "../../classes/conexao.php";
require_once "../../classes/usuarios.php";

$obj = new usuarios(); // chamando minha classe de usuarios 

$senha = sha1($_POST['senha']); // criptografando minha senha 

$dados =array(     // criando meu array com os dados do formulário 
    $_POST['nome'],
    $_POST['usuario'],
    $_POST['email'],
    $senha
);

echo $obj -> registrarUsuario($dados);


?>