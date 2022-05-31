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
</head>
<body>
	<br>
	<div class="container">
     <h1 class="cnt">Edite ou delete os seus dados</h1>
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
                    <th scope="col">Funções</th>
				</tr>
			</thead>
			<?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
			<tbody>
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
					<td>
						<a href="deletar.php?id=<?php echo $usuario['id_usuario']; ?>" class="btn btn-sm btn-danger " >Excluir</a> <br>
                        <a href="editarCOD.php?id=<?php echo $usuario['id_usuario']; ?>" class="btn btn-sm btn-warning " >Editar</a>
					</td>
				</tr>

			</tbody>
			<?php } ?>
		</table>

        <div class="cnt">
		<a href="home.php" class="btn btn-dark" >Página Inicial</a>
       



	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>