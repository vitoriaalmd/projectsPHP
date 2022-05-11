<?php include'menu.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>   
    <title>Document</title>
</head>
<body>
<div class="container col-md-6 offset-md-3">
		<h1>Formulário de Matrícula</h1>   
        <form method="post" action="salvar.php">
        <h2>Dados do(a) estudante</h2> 
        <div class="row g-3">
            <div class="col-sm-12">
                Nome Completo: <input type="text" placeholder="Nome" class="form-control form-control-sm" required>
            </div>
        </div>
        <div class row mb-3>
            <div class="col-sm-5">
                <label>Sexo:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                    Feminino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                  Masculino
                </div>
            <div class="col-sm-3">
                 <label>Data de Nascimento:</label>
                 <div class="input-group"  required> 
                 <input type="date" class="form-control form-control-sm" id="dataNascimento">
                 </div>
                 </div>
            
        </div>
</body>
</html>