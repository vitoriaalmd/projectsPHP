<?php include'menu.php';
include'conexaobd.php'; 
include'listaBD.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Listar</title>
</head>
<body>
    
<form action="salvar.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Label exemplo</label>
    <input type="text" name = "nome" class="form-control" id="nome" placeholder="Input exemplo">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Outra label</label>
    <input type="text" name = "nome2" class="form-control" id="nome2" placeholder="Outro input">
  </div>
</form>
</body>
</html>