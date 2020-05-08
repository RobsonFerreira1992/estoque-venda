
<?php
require_once "../../classes/conexao.php";
require_once "../../classes/fornecedores.php";

$obj = new fornecedores();

$dados =array($_POST['idfornecedor']);

echo $obj->excluir($dados);


?>