<?php
class categorias{
    public function adicionarCategoria($dados){
        $c = new conectar();
        $conexao =$c ->conexao();

        $sql = "INSERT INTO `categorias`(`id_usuario`,`nome_categoria`,`dataCaptura`) VALUES ('$dados[0]','$dados[1]','$dados[2]')";

        return mysqli_query($conexao,$sql);

    }

    public function atualizarCategoria($dados){
        $c = new conectar();
        $conexao =$c->conexao();

        $sql = "UPDATE `categorias` SET nome_categoria = '$dados[1]' where id_categoria = '$dados[0]'";

        return mysqli_query($conexao,$sql);
    }

    public function excluirCategoria($dados){
           $c = new conectar();
           $conexao =$c->conexao();

           $sql = "DELETE FROM `categorias` where id_categoria = '$dados[0]'";


           return mysqli_query($conexao,$sql);

    }






}


?>