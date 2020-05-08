<?php 
require_once "../../classes/conexao.php";
	$c = new conectar();
		$conexao =$c->conexao();
	$sql = "SELECT `id`, `nome`,`user`,`email` FROM `usuarios`";
	$result = mysqli_query($conexao,$sql);


?>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Usuarios</label></caption>
	<tr>
		<td>Nome</td>
		<td>User</td>
		<td>E-mail</td>
		<td>Editar</td>
		<td>Excluir</td>
	</tr>

	<?php while($mostrar = mysqli_fetch_row($result)): ?>
	
	<tr>
		<td><?php echo $mostrar[1];?></td>
		<td><?php echo $mostrar[2];?></td>
		<td><?php echo $mostrar[3];?></td>

		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#atualizaUsuarioModal" onclick="adicionarDado('<?php echo $mostrar[0];?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminar('<?php echo $mostrar[0];?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>

<?php endwhile?>
</table>