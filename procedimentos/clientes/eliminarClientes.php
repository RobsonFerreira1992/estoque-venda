
<?php
require_once "../../classes/conexao.php";
require_once "../../classes/clientes.php";

$obj = new clientes();

$dados =array($_POST['idcliente']);

echo $obj->excluirCliente($dados);


?>