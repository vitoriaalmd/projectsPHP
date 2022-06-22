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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>

<div id="cnt">
        <h1 class="cnt2">Viva uma experiência incrível!</h1>
        <h5>Reserve sua viagem! Venha viver momentos únicos com a gente!</h5>
        <a href="#form" class="btn btn-dark">RESERVAS</a>
    </div>

    <br>
    <br>
    <br>

    <section class="bcgb">  <div class="container">
        <br>
        <h1 class="cnt">Formulário para Reserva de Viagem</h1>
        <h5 class="cnt">Por favor, nos forneça as informações de contato abaixo e faremos a reserva da sua viagem.</h5>
        <br>
        <div class="line"></div>
        <br>

        <form method="post" action="salvar.php" id="form">

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
                        <option value="ClasseEC">Classe Econômica</option>
                        <option value="ClasseEM">Classe Empresarial</option>
                        <option value="PC">Primeira Classe</option>
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
             <button type="submit" class="btn btn-dark" id="btnSalvar"  data-bs-toggle="modal" data-bs-target="#exampleModal">
               Enviar
             </button>
            </div>
            
            <br>
          </form>
         </div>

         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         X
        </button>
      </div>
      <div class="modal-body">
        Preencha todos os campos!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
            
    <br>
    
<button onclick="backToTop()" id="btnTop"><img src="img/capslock.svg" alt="TOPO"></button>


<script type="text/javascript" src="jquery.js"></script>

<script>
jQuery(document).ready(function($){
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html, body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
});
</script> 

<script>
    window.onscroll = function(){
        scroll();
    }
    function scroll(){
        var btn= document.getElementById("btnTop");
        if(document.documentElement.scrollTop > 200){
          btn.style.display="block";
        }
        else{
            btn.style.display="none";
        }
    }
    function backToTop(){
        document.documentElement.scrollTop=0;
    }
</script>

    <script src="mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>