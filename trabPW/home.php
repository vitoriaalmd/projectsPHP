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
    <title>Trabalho</title>
</head>
<body>
<div class="container">
<br>
		<center> <h1>Formulário de Matrícula</h1></center>
      _____________________________________________________________________________________________________________________________________________________________________
       
      <br>
      <br>
       <form method="post" action="salvar.php">

        <div class="row mb-3">
            <div class="col-sm-12">
            Escola Anterior: &nbsp <div class="form-check form-check-inline" required> 
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio1" value="option1">
                    Rede Pública de Ensino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio2" value="option2">
                Rede Privada
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
            Nome da escola de origem: <input type="text" placeholder="Nome da escola de origem" class="form-control form-control-sm" id="EscOrigem" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
            Município da escola de origem: <input type="text" placeholder="Município da escola de origem" class="form-control form-control-sm" id="MunicEsc" required>
            </div>
        </div>
        ________________________________________________________________________________________________________________________________________________________________________
        <br>
        <br>
        <center><h2>Dados do(a) Estudante</h2> </center>

        <div class="row mb-3">
            <div class="col-sm-12">
                Nome Completo: <input type="text" placeholder="Nome" class="form-control form-control-sm" required>
            </div>
        </div>

        <div class ="row mb-3">
            <div class="col-sm-3">
                <label>Sexo:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio3" value="option1">
                    Feminino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio4" value="option2">
                  Masculino
                </div>
            </div>
                <div class="col-sm-2">
                    <label>Cartão de Vacinação:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio5" value="option1">
                    Sim
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio6" value="option2">
                  Não
                </div>
                </div>
                <div class="col-sm-4">
                Nº do Cartão SUS: <input type="text" placeholder="000 0000 000 0000" class="form-control form-control-sm" id = "SUS" maxlength="15" oninput="mascaraa('sus')" required>  
                </div>
            <div class="col-sm-3">
                 <label>Data de Nascimento:</label>
                 <div class="input-group"  required> 
                
                 <input type="date" class="form-control form-control-sm" id="dataNascimento">
                 </div>
                 </div>
        </div>
        
        <div class="row">
            <div class="col-sm-7">
            <label>Nacionalidade:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio7" value="option1">
                    Brasileiro
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio8" value="option2">
                  Brasileiro - nascido no Exterior ou naturalizado
                </div>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio9" value="option3">
                    Estrangeiro
                </div>
            </div>
            <div class="col-sm-5">
                    <br>
                          <label>UF (atual):</label>
                          <select class= "form-control-sm" required >
                            <option>...</option>
                              <option>AC</option>
                              <option>AL</option>
                              <option>AP</option>
                              <option>AM</option>
                              <option>BA</option>
                              <option>CE</option>
                              <option>DF</option>
                              <option>ES</option>
                              <option>GO</option>
                              <option>MA</option>
                              <option>MT</option>
                              <option>MS</option>
                              <option>MG</option>
                              <option>PA</option>
                              <option>PR</option>
                              <option>PE</option>
                              <option>PI</option>
                              <option>RJ</option>
                              <option>RN</option>
                              <option>RS</option>
                              <option>RO</option>
                              <option>RR</option>
                              <option>SC</option>
                              <option>SP</option>
                              <option>SE</option>
                              <option>TO</option>
                          </select>
            </div>
        </div>
        <br>

        <div class ="row mb-3">
            <div class="col-sm-3">
                 <label>Transporte Escolar Público:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio10" value="option1">
                    Utiliza
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio11" value="option2">
                  Não utiliza
                </div>  
            </div>
        <div class="col-sm-4">
                 <label>Poder público responsável pelo transporte:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio12" value="option1">
                    <label class="form-check-label" for="inlineRadio12"> Municipal </label>
                </div> &nbsp
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio13" value="option2">
                <label class="form-check-label" for="inlineRadio13">  Estadual </label>
                </div>  &nbsp
            </div>
            <div class="col-sm-5">
                Email do Aluno: <input type="email" placeholder="eeep@eeep.com" class="form-control form-control-sm" id="email" required>
            </div>
        </div>
        ________________________________________________________________________________________________________________________________________________________________________
        <br>
        <br>
   

        <div class ="row mb-3">
            <div class="col-sm-3">
             <label>Portador de necessidade especial: </label>  
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio14" value="option1">
                    Sim
                </div> 
                <div class="form-check form-check-inline"> 
                <input class="form-check-input" name="inlineRadioOptions" type="radio" id="inlineRadio15" value="option2">
                Não 
                </div>  
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <label>Caso a resposta tenha sido SIM, indique a(s) necessidade especial:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
                    <label class="form-check-label" for="inlineCheckbox1">Cegueira</label> 
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
                    <label class="form-check-label" for="inlineCheckbox2">Deficiêcia Auditiva</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Intelectual</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Física</label><br>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Múltipla</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Baixa Visão</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Surdez</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Surdocegueira</label>
                </div> &nbsp &nbsp
            </div>
        </div>

        <div class ="row mb-3">
            
            <div class= "col-sm-4">
            <label>Altas habilidades/Superdotação:</label>
            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Altas habilidades/Superdotação</label>
                </div> &nbsp &nbsp
        </div>
        <div class="col-sm-6">
                <label>Transtorno global de Desenvolvimento:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio16" value="opcao1">
                    <label class="form-check-label" for="inlineRadio16">Autismo Infantil</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio17" value="opcao2">
                    <label class="form-check-label" for="inlineRadio17">Síndrome de Asperger</label>
                </div> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio18" value="opcao3">
                    <label class="form-check-label" for="inlineRadio18">Transtorno desintegrativo de infância</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio19" value="opcao4">
                    <label class="form-check-label" for="inlineRadio19"> Síndrome de Rett</label>
                </div> &nbsp
            </div>
        </div>
        ________________________________________________________________________________________________________________________________________________________________________
        <br>
        <br>

        <div class="row-mb-3">
            <div class="col-sm-10">
            Raça/Cor: <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio20" value="opcao1">
                    <label class="form-check-label" for="inlineRadio20">Amarela</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio21" value="opcao2">
                    <label class="form-check-label" for="inlineRadio21">Branca</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio22" value="opcao3">
                    <label class="form-check-label" for="inlineRadio22">Não declarada</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio23" value="opcao4">
                    <label class="form-check-label" for="inlineRadio23">Parda</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio24" value="opcao5">
                    <label class="form-check-label" for="inlineRadio24">Preta</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio25" value="opcao6">
                    <label class="form-check-label" for="inlineRadio25">Indígena</label>
                </div> 
            </div>
        </div>
        <br>

        <div class="row mb-3">
            <div class="col-sm-3">
                Nº CPF: <input type="text" class="form-control form-control-sm" placeholder="000.000.000-00" id="CPF" maxlength="11" oninput="mascaraa('cpf')" required>
            </div>  &nbsp  &nbsp
            <div class="col-sm-3">
                Nº RG: <input type="text" class="form-control form-control-sm" placeholder="0000000000-0" id="rg" required>
            </div>  &nbsp  &nbsp
            <div class="col-sm-2">
                Orgão Exp. : <input type="text" class="form-control form-control-sm" placeholder="" id="orgExp" required>
            </div>  &nbsp  &nbsp
            <div class="col-sm-1">
            <label>UF:</label>
            <br>
                          <select class= "form-control-sm" required >
                            <option>...</option>
                              <option>AC</option>
                              <option>AL</option>
                              <option>AP</option>
                              <option>AM</option>
                              <option>BA</option>
                              <option>CE</option>
                              <option>DF</option>
                              <option>ES</option>
                              <option>GO</option>
                              <option>MA</option>
                              <option>MT</option>
                              <option>MS</option>
                              <option>MG</option>
                              <option>PA</option>
                              <option>PR</option>
                              <option>PE</option>
                              <option>PI</option>
                              <option>RJ</option>
                              <option>RN</option>
                              <option>RS</option>
                              <option>RO</option>
                              <option>RR</option>
                              <option>SC</option>
                              <option>SP</option>
                              <option>SE</option>
                              <option>TO</option>
                          </select>
        </div>  &nbsp
        <div class="col-sm-2">
                Data de Expedição: <input type="date" class="form-control form-control-sm" placeholder="">
            </div>
        </div>
        ________________________________________________________________________________________________________________________________________________________________________
        <br>
        <br>
        <center> <h2>Dados dos Pais/Mães/Responsáveis Legais</h2></center>
        <div class="row mb-3">
            <div class="col-sm-6">
            Nome da Mãe: <input type="text" placeholder="nome" class="form-control form-control-sm" id="nomeMAE" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="text" placeholder="000.000.000-00" class="form-control form-control-sm" id="CPFmae" maxlength="11" oninput="mascaraa('cpf')" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="text" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="CelularMae" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
            Nome do Pai: <input type="text" placeholder="nome" class="form-control form-control-sm" id="nomePai" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="text" placeholder="000.000.000-00" class="form-control form-control-sm" id="CPFpai" maxlength="11" oninput="mascaraa('cpf')" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="text" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="CelularPai" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>
        </div>

        <div class="row-mb-3">
            <div class="col-sm-12">
            Responsável Legal do Aluno(a): <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio26" value="opcao1">
                    <label class="form-check-label" for="inlineRadio26">Pai/Mãe</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio27" value="opcao2">
                    <label class="form-check-label" for="inlineRadio27">Só Pai</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio28" value="opcao3">
                    <label class="form-check-label" for="inlineRadio28">Só Mãe</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio29" value="opcao4">
                    <label class="form-check-label" for="inlineRadio29">Outro Responsável Legal</label>
                </div> &nbsp
            </div>
        </div>
<br>
        <div class="row mb-3">
            <div class="col-sm-6">
            Nome do(a) Responsável: <input type="text" placeholder="nome" class="form-control form-control-sm" id="nomeRESP" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="text" placeholder="000.000.000-00" class="form-control form-control-sm" id="CPFresp" maxlength="11" oninput="mascaraa('cpf')" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="text" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="CelularResp" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Endereço: <input type="text" placeholder="endereço" class="form-control form-control-sm" id="endereco" required> 
            </div> &nbsp &nbsp
            <div class="col-sm-1">
            Nº: <input type="number" placeholder="" class="form-control form-control-sm" id="numero" required> 
            </div> &nbsp &nbsp &nbsp 
            <div class="col-sm-5">
                <br>
            Localização/Zona de Residência: <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                    <label class="form-check-label" for="inlineRadio1">Urbana</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                    <label class="form-check-label" for="inlineRadio2">Rural</label>
                </div> &nbsp
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Bairro: <input type="text" placeholder="bairro" class="form-control form-control-sm" id="bairro" required> 
            </div>
            <div class="col-sm-3">
            Município: <input type="text" placeholder="município" class="form-control form-control-sm" id="municipio" required> 
            </div>
            <div class="col-sm-1">
            <label>UF:</label>
            <br>
                          <select class= "form-control-sm" required >
                            <option>...</option>
                              <option>AC</option>
                              <option>AL</option>
                              <option>AP</option>
                              <option>AM</option>
                              <option>BA</option>
                              <option>CE</option>
                              <option>DF</option>
                              <option>ES</option>
                              <option>GO</option>
                              <option>MA</option>
                              <option>MT</option>
                              <option>MS</option>
                              <option>MG</option>
                              <option>PA</option>
                              <option>PR</option>
                              <option>PE</option>
                              <option>PI</option>
                              <option>RJ</option>
                              <option>RN</option>
                              <option>RS</option>
                              <option>RO</option>
                              <option>RR</option>
                              <option>SC</option>
                              <option>SP</option>
                              <option>SE</option>
                              <option>TO</option>
                          </select>
        </div>
        <div class="col-sm-3">
            CEP: <input type="text" placeholder="00000-000" class="form-control form-control-sm" id="CEP" maxlength="8" oninput="mascaraa('cep')" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Local de Trabalho: <input type="text" placeholder="" class="form-control form-control-sm" id="localTrab" required> 
            </div>
            <div class="col-sm-4">
            Telefone: <input type="text" placeholder="(00) 00000-0000" class="form-control form-control-sm" id = "CelularLT" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>         
        </div>
    </form>
</div>
<script src="mask.js"></script>
</body>
</html>