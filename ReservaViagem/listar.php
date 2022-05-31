<?php
	include 'conexaobd.php';
	$listarSQL = mysqli_query($conexaoBD, "SELECT * FROM usuario");

?>