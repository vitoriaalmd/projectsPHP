<?php
include 'menu.php';
include 'listar.php';
include 'conexaobd.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tabela PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="editar.css">
	<script type="text/javascript" src="jquery.js"></script>
	<!-- <script src="jquery-1.7.2.min.js" type="text/javascript"></script> -->
	<!-- <script src="jquery.quicksearch.js" type="text/javascript"></script> -->

</head>

<body>
	<br>
	<div class="container">
		<h1 class="cnt">Lista de Dados</h1>
	
		<br>
		
		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Data de Nasc.</th>
					<th scope="col">Email</th>
					<th scope="col">Telefone</th>
					<th scope="col">País de Saída</th>
					<th scope="col">País de Destino</th>
					<th scope="col">Data - Saída</th>
					<th scope="col">Data - Destino</th>
					<th scope="col">Classe</th>
					<th scope="col">Serviço(s)</th>

				</tr>
			</thead>
			<?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
				<tbody id="myTable">
					<tr>
						<td><?php echo $usuario['id_usuario']; ?></td>
						<td><?php echo $usuario['nome']; ?></td>
						<td><?php echo $usuario['DataN']; ?></td>
						<td><?php echo $usuario['email']; ?></td>
						<td><?php echo $usuario['telefone']; ?></td>
						<td><?php echo $usuario['paisSai']; ?></td>
						<td><?php echo $usuario['paisDes']; ?></td>
						<td><?php echo $usuario['DataS']; ?></td>
						<td><?php echo $usuario['DataR']; ?></td>
						<td><?php echo $usuario['classe']; ?></td>
						<td><?php echo $usuario['servicos']; ?></td>
					</tr>

				</tbody>
			<?php } ?>
		</table>

		<br>
		<div class="cnt">
			<a href="home.php" class="btn btn-warning ">Página Inicial</a>
			<a href="editarP.php" class="btn btn-dark ">Editar ou Deletar dados</a>
		</div>


	</div>
</body>

</html>