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

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container col-md-6 offset-md-3">
        <h1>Formulário Edição</h1>
        <form method="post">
        <div class="row mb-1">
                <div class="col-sm-9">
                    Nome Completo: <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                </div>
                <div class="col-sm-3">
                    <label>Data de Nascimento:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataN" class="form-control form-control-sm" id="dataNascimento" required>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-3">
                <div class="col-sm-8">
                    Email: <input type="email" name="email" placeholder="exemplo@exemplo.com" class="form-control form-control-sm" id="email" required>
                </div>
                <div class="col-sm-4">
                    Telefone: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telefone" maxlength="11" oninput="mascaraa('TelFixo')" required>
                </div>
            </div>

            <br>

            <h2 class="cnt">Dados de Viagem</h2>
            <div class="line"></div>
            <br>

            <div class="row mb-3">
                <div class="col-sm-6">
                    País de Saída: <input type="text" class="form-control" placeholder="Brasil" name="paisSai" required>
                </div>
                <div class="col-sm-6">
                    País de Destino: <input type="text" class="form-control" placeholder="Canadá" name="paisDes" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6">
                    <label>Data de Saída:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataS" class="form-control form-control-sm" id="dataSaida" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label>Data de Retorno:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataR" class="form-control form-control-sm" id="dataRetorno" required>
                    </div>
                </div>
            </div>
            
            <div class="row mb-8">
                <div class="col sm-5">
                    <label>Classe da Viagem:</label>
                    <select class="form-control-sm" name="classe" >
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
             <button type="submit" class="btn btn-dark" id="btnEditar">
               Editar
             </button>
            </div>
            
            <br>
          </form>
         </div>
</body>

</html>