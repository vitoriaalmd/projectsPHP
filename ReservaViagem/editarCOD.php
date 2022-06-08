<?php
include 'menu.php';
include 'editarBD.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="editarCOD.css">
    <script type="text/javascript" src="jquery.js"></script>

</head>

<body>
    <br>
    <div class="container">
        <br>
        <h1 class="cnt">Formulário de Edição</h1>
        <br>
    <div class="line"></div>
    <br>


        <form method="post" action="editarBD.php">
        <div class="row mb-1">
                <div class="col-sm-9">
                    Nome Completo: <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $nome;?>"required>
                </div>
                <div class="col-sm-3">
                    <label>Data de Nascimento:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataN" class="form-control form-control-sm" id="dataNascimento" value="<?php echo $DataN;?>"required>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-3">
                <div class="col-sm-8">
                    Email: <input type="email" name="email" placeholder="exemplo@exemplo.com" class="form-control form-control-sm" id="email" value="<?php echo $email;?>" required>
                </div>
                <div class="col-sm-4">
                    Telefone: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telefone" maxlength="11" oninput="mascaraa('TelFixo')" value="<?php echo $telefone;?>" required>
                </div>
            </div>

            <br>

            <h2 class="cnt">Dados de Viagem</h2>
            <div class="line"></div>
            <br>

            <div class="row mb-3">
                <div class="col-sm-6">
                    País de Saída: <input type="text" class="form-control" placeholder="Brasil" name="paisSai" value="<?php echo $paisSai;?>" required>
                </div>
                <div class="col-sm-6">
                    País de Destino: <input type="text" class="form-control" placeholder="Canadá" name="paisDes" value="<?php echo $paisDes;?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6">
                    <label>Data de Saída:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataS" class="form-control form-control-sm" id="dataSaida" value="<?php echo $dataS;?>" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label>Data de Retorno:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataR" class="form-control form-control-sm" id="dataRetorno" value="<?php echo $dataR;?>" required>
                    </div>
                </div>
            </div>
            
            <div class="row mb-8">
                <div class="col sm-5">
                    <label>Classe da Viagem:</label>
                    <select class="form-control-sm" name="classe" value="<?php echo $classe;?>" required >
                        <option>...</option>
                        <option>Classe Econômica</option>
                        <option>Classe Empresarial</option>
                        <option>Primeira Classe</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="row mb-7">
                <div class="col sm-6">
                    Por favor, marque os serviços que você precisa:
                    <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" name="servicos" id="PassagensAe" value="Passagens">
                        <label class="form-check-label" for="PassagensAe">Passagens Aéreas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="servicos" id="aluguel" value="Aluguel">
                        <label class="form-check-label" for="aluguel">Aluguel de Carros</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="servicos" id="acomodacoes" value="Acomodacoes">
                        <label class="form-check-label" for="acomodacoes">Acomodações em Hotéis</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
             <button name="editarCOD" type="submit" class="btn btn-dark" id="btnEditar">
               Editar
             </button>
            </div>
            
            <br>
          </form>
         </div>

         <script src="mask.js"></script>
</body>

</html>