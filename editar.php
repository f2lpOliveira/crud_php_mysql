<?php
require 'config.php';
$veiculo = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
	$sql = $pdo->prepare("SELECT * FROM veiculo WHERE id = :id");
	$sql->bindValue(':id', $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$veiculo = $sql->fetch(PDO::FETCH_ASSOC);
	}else{
		header("Location: index.php");
		exit;
	}
}else{
	header("Location: index.php");
}
?>

<h1>Editar Veículo</h1>
<form method="POST" action="editar_action.php">
	<input type="hidden" name="id" value="<?=$veiculo['id'];?>"/>
	<label>
		Marca: <input type="text" name="marca" value="<?=$veiculo['marca'];?>"/>
	</label>
	<label>
		Modelo: <input type="text" name="modelo" value="<?=$veiculo['modelo'];?>"/>
	</label>
	<input type="submit" value="Atualizar"/>
</form>