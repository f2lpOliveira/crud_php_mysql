<?php 
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM veiculo ");
if($sql->rowCount() > 0){
	$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem de Veículos</h1>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Ações</th>
	</tr>
	<?php foreach($lista as $veiculo): ?>
		<tr>
			<td><?=$veiculo['id'];?></td>
			<td><?=$veiculo['marca'];?></td>
			<td><?=$veiculo['modelo'];?></td>
			<td>
				<a href="editar.php?id=<?=$veiculo['id'];?>">[ Editar ]</a>
				<a href="excluir.php?id=<?=$veiculo['id'];?>">[ Excluir ]</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Veículos</a>