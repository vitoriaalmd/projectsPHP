<?php 
	include 'conexaoBD.php';

	if (isset($_GET['id_usuario'])) {
		$id_usuario = $_GET['id_usuario'];
		$sql = mysqli_query($conexaoBD, "SELECT * FROM usuario WHERE id_usuario=$id_usuario ");
	}
?>