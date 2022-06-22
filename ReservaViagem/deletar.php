<?php 
	include 'conexaobd.php';

	$id_usuario = $_GET["id_usuario"];
	
	if(isset($_GET['id_usuario'])){
	$sql = mysqli_query($conexaoBD, "DELETE FROM usuario WHERE id_usuario = {$id_usuario} ") 
	   	or die(mysqli_error($conexaoBD));

	header('location: tabela.php');
	}
?>