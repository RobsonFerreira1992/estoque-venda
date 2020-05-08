<?php
 session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/usuarios.php";

$obj = new usuarios(); // chamando minha classe de usuarios 

 

$dados =array(     // criando meu array com os dados do formulário 
    $_POST['email'],
    $_POST['senha']
);

echo $obj -> login($dados);


?>