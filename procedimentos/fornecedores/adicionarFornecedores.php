<?php
session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/fornecedores.php";


$idusuario = $_SESSION['iduser'];
$nome  = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf   = $_POST['cpf'];

$obj = new fornecedores(); // chamando minha classe de categorias

$dados =array(     // criando meu array com os dados do formulário 
   $idusuario,
   $nome,
   $sobrenome,
   $endereco,
   $email,
   $telefone,
   $cpf
);

echo $obj -> adicionar($dados);


?>