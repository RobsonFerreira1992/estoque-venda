
<?php
require_once "../../classes/conexao.php";
require_once "../../classes/categorias.php";

$obj = new categorias();

$dados =array($_POST['idcategoria']);

echo $obj->excluirCategoria($dados);


?>