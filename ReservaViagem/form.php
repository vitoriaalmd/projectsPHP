<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="trabbd.css">
</head>

<body>
    <br>
    <div class="container">
        <br>
        <h1 class="cnt">Formulário para Reserva de Viagem</h1>
        <h5 class="cnt">Por favor, nos forneça as informações de contato abaixo e faremos a reserva da sua viagem.</h5>
        <br>
        <div class="line"></div>
        <br>

        <form method="post" action="salvar.php">

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
                        <input class="form-check-input" type="checkbox" name="servicos" id="PassagensAe" value="PassagensAe">
                        <label class="form-check-label" for="PassagensAe">Passagens Aéreas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="servicos" id="aluguel" value="aluguel">
                        <label class="form-check-label" for="aluguel">Aluguel de Carros</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="servicos" id="acomodacoes" value="acomodacoes">
                        <label class="form-check-label" for="acomodacoes">Acomodações em Hotéis</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-dark" id="btnSalvar" data-bs-toggle="modal" data-bs-target="#meuModal" >Enviar</button>
            </div>

            <br>
        </form>
        
        <!-- Modal -->
        <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Você deseja enviar esses dados?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
            
        
    </div>
    <br>
    <script src="mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>