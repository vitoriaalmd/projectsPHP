<?php 
	include 'conexaoBD.php';

	if (isset($_GET['id_usuario'])) {
		$id_usuario = $_GET['id_usuario'];
		$sql = mysqli_query($conexaoBD, "SELECT * FROM usuario WHERE id_usuario=$id_usuario");
	
		$count = (is_array($sql)) ? count($sql) : 1;
		if ($count) {
			$n = mysqli_fetch_array($sql);
			$nome = $n['nome'];
			$DataN = $n['DataN'];
			$email = $n['email'];
			$telefone = $n['telefone'];
			$paisSai = $n['paisSai'];
			$paisDes = $n['paisDes'];
			$DataS =  $n['DataS'];
			$DataR = $n['DataR'];
			$classe =  $n['classe'];
			$servicos =  $n['servicos'];
		}
	}
	
	
	if (isset($_POST['editarCOD'])) {
		$id_usuario = $_GET["id_usuario"];
		$nome = $_POST["nome"];
		$DataN = $_POST['DataN'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$paisSai = $_POST['paisSai'];
		$paisDes = $_POST['paisDes'];
		$DataS = $_POST['DataS'];
		$DataR = $_POST['DataR'];
		$classe = $_POST['classe'];
		$servicos = $_POST['servicos'];
		$query = "UPDATE usuario SET nome = '$nome', DataN = '$DataN', email = '$email', telefone= '$telefone', paisSai= '$paisSai', paisDes= '$paisDes', DataS= '$DataS' , DataR = '$DataR', classe = '$classe', servicos= '$servicos', query= '$query' WHERE id_usuario = $id_usuario";
	
		$consulta = mysqli_query($conexaoBD, $query);
	
		header('location: tabela.php');
	}
	
	
?>