<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$marca = filter_input(INPUT_POST, 'marca');
$modelo = filter_input(INPUT_POST, 'modelo');

if($id && $marca && $modelo){
	$sql = $pdo->prepare("UPDATE veiculo SET marca = :marca, modelo = :modelo WHERE id = :id");
	$sql->bindValue(':marca', $marca);
	$sql->bindValue(':modelo', $modelo);
	$sql->bindValue(':id', $id);
	$sql->execute();
	header("Location: index.php");
	exit;
}else{	
	header("Location: index.php");
	exit;
}