<?php
require 'config.php';

$marca = filter_input(INPUT_POST, 'marca');
$modelo = filter_input(INPUT_POST, 'modelo');

if($marca && $modelo){

	$sql = $pdo->prepare("INSERT INTO veiculo (marca, modelo) VALUES (:marca, :modelo)");
	$sql->bindValue(':marca', $marca);
	$sql->bindValue(':modelo', $modelo);
	$sql->execute();
	
	header("Location: index.php");
}else{
	header("Location: cadastrar.php");
}