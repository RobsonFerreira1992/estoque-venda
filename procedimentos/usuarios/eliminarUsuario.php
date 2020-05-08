<?php
require_once "../../classes/conexao.php";
require_once "../../classes/usuarios.php";

$obj = new usuarios();

$dados =array($_POST['idusuario']);

echo $obj->excluir($dados);


?>