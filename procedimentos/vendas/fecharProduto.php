<?php

session_start();
$index=$_POST['ind'];
unset($_SESSION['tabelaComprasTemp'][$index]);//  unset  é retire para mim dessa sessao o valor $index 
$dados= array_values($_SESSION['tabelaComprasTemp']);
unset($_SESSION['tabelaComprasTemp']);
$_SESSION['tabelaComprasTemp']=$dados;


?>