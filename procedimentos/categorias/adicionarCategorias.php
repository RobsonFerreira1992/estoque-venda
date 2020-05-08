<?php
session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/categorias.php";




$data = date("Y-m-d");
$idusuario = $_SESSION['iduser'];
$categoria = $_POST['categoria'];

$obj = new categorias(); // chamando minha classe de categorias

$dados =array(     // criando meu array com os dados do formulário 
   $idusuario,
   $categoria,
   $data
);

echo $obj -> adicionarCategoria($dados);


?>