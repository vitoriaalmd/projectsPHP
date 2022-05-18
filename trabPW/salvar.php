<?php
include 'conexaobd.php';

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];

	$sql = mysqli_query($conexaoBD, "INSERT INTO usuario(nome, sobrenome) VALUES ('$nome', '$sobrenome')");
	
	if ($sql) {
		header('location: home.php');
	}
?>