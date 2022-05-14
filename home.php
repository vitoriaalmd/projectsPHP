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
<div class="container">
		<center> <h1>Formulário de Matrícula</h1></center>
        <form method="post" action="salvar.php">

        <div class="row mb-3">
            <div class="col-sm-12">
            Escola Anterior:<div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                    Rede Pública de Ensino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                Rede Privada
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
            Nome da escola de origem: <input type="text" placeholder="Nome" class="form-control form-control-sm" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
            Município da escola de origem: <input type="text" placeholder="Nome" class="form-control form-control-sm" required>
            </div>
        </div>
    ________________________________________________________________________________________________________________________________________________
    <br>
    <br>


        <center><h2>Dados do(a) estudante</h2> </center>
        <div class="row mb-3">
            <div class="col-sm-12">
                Nome Completo: <input type="text" placeholder="Nome" class="form-control form-control-sm" required>
            </div>
        </div>
        <div class ="row mb-3">
            <div class="col-sm-3">
                <label>Sexo:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                    Feminino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                  Masculino
                </div>
            </div>
                <div class="col-sm-2">
                 <label>Cartão de Vacinação:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio12" value="option3">
                    Sim
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio21" value="option4">
                  Não
                </div>
                </div>
                <div class="col-sm-4">
                Nº do Cartão SUS: <input type="number" placeholder="" class="form-control form-control-sm" required>  
                </div>
            <div class="col-sm-3">
                 <label>Data de Nascimento:</label>
                 <div class="input-group"  required> 
                 <input type="date" class="form-control form-control-sm" id="dataNascimento">
                 </div>
                 </div>
            
        </div>
        <div class ="row mb-3">
        <div class="col-sm-7">
                 <label>Nacionalidade:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio12" value="option3">
                    Brasileira
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio21" value="option4">
                  Brasileira - nascido no exterior ou naturalizado
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio21" value="option4">
                  Estrangeira
                </div>
                </div>
                <div class="col-sm-5">  
                Naturalidade/UF: <input type="text" placeholder="Naturalidade/UF" class="form-control form-control-sm" required>     
            </div>
        </div>

        <div class ="row mb-3">
        <div class="col-sm-3">
                 <label>Transporte Escolar Público:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio12" value="option3">
                    Utiliza
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio21" value="option4">
                  Não utiliza
                </div>  
        </div>
        <div class="col-sm-4">
                 <label>Poder público responsável pelo transporte:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio12" value="option3">
                    Municipal
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio21" value="option4">
                  Estadual
                </div>  
        </div>
        <div class="col-sm-5">
        Email do Aluno: <input type="email" placeholder="Nome" class="form-control form-control-sm" required>
        </div>
        </div>


        </form>
        
        </div>
</body>
</html>
