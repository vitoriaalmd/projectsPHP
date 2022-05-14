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
		<center> <h1>Formulário de Matrícula</h1></center>
        <form method="post" action="salvar.php">

        <div class="row mb-3">
            <div class="col-sm-12">
            Escola Anterior: &nbsp <div class="form-check form-check-inline" required> 
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
        
        <div class="row">
            <div class="col-sm-7">
            <label>Nacionalidade:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                    Brasileiro
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" type="radio" id="inlineRadio2" value="option2">
                  Brasileiro - nascido no Exterior ou naturalizado
                </div>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
                    Estrangeiro
                </div>
            </div>
            <div class="col-sm-5">
                    <br>
                          <label>UF:</label>
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
        ________________________________________________________________________________________________________________________________________________________________________
        <br>
        <br>
        <br>

        <div class ="row mb-3">
            <div class="col-sm-3">
             <label>Portador de necessidade especial: </label>  
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" id="inlineRadio12" value="option3">
                    Sim
                </div> 
                <div class="form-check form-check-inline"> 
                <input class="form-check-input" type="radio" id="inlineRadio21" value="option4">
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
            <div class="col-sm-6">
                <label>Transtorno global de Desenvolvimento:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                    <label class="form-check-label" for="inlineRadio1">Autismo Infantil</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                    <label class="form-check-label" for="inlineRadio2">Síndrome de Asperger</label>
                </div> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Transtorno desintegrativo de infância</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3"> Síndrome de Rett</label>
                </div> &nbsp
            </div>
            <div class= "col-sm-4">
            <label>Altas habilidades/Superdotação:</label>
            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineDeficienciaIntelectual" value="opcao3">
                    <label class="form-check-label" for="inlineCheckbox3">Altas habilidades/Superdotação</label>
                </div> &nbsp &nbsp
        </div>
        </div>
        ________________________________________________________________________________________________________________________________________________________________________
        <br>
        <br>

        <div class="row-mb-3">
            <div class="col-sm-10">
            Raça/Cor: <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                    <label class="form-check-label" for="inlineRadio1">Amarela</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                    <label class="form-check-label" for="inlineRadio2">Branca</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Não declarada</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Parda</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Preta</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Indígena</label>
                </div> 
            </div>
        </div>
        <br>

        <div class="row mb-3">
            <div class="col-sm-3">
                Nº CPF: <input type="number" class="form-control form-control-sm" placeholder="CPF">
            </div>  &nbsp  &nbsp
            <div class="col-sm-3">
                Nº RG: <input type="number" class="form-control form-control-sm" placeholder="RG">
            </div>  &nbsp  &nbsp
            <div class="col-sm-2">
                Orgão Exp. : <input type="text" class="form-control form-control-sm" placeholder="">
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
            Nome da Mãe: <input type="text" placeholder="" class="form-control form-control-sm" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="number" placeholder="CPF" class="form-control form-control-sm" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="number" placeholder="" class="form-control form-control-sm" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
            Nome do Pai: <input type="text" placeholder="" class="form-control form-control-sm" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="number" placeholder="CPF" class="form-control form-control-sm" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="number" placeholder="" class="form-control form-control-sm" required> 
            </div>
        </div>

        <div class="row-mb-3">
            <div class="col-sm-12">
            Responsável Legal do Aluno(a): <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                    <label class="form-check-label" for="inlineRadio1">Pai/Mãe</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                    <label class="form-check-label" for="inlineRadio2">Só Pai</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Só Mãe</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                    <label class="form-check-label" for="inlineRadio3">Outro Responsável Legal</label>
                </div> &nbsp
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
            Nome do(a) Responsável: <input type="text" placeholder="" class="form-control form-control-sm" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="number" placeholder="CPF" class="form-control form-control-sm" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="number" placeholder="" class="form-control form-control-sm" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Endereço: <input type="text" placeholder="" class="form-control form-control-sm" required> 
            </div> &nbsp &nbsp
            <div class="col-sm-1">
            Nº: <input type="number" placeholder="" class="form-control form-control-sm" required> 
            </div> &nbsp &nbsp &nbsp 
            <div class="col-sm-5">
                <br>
            Localização/Zona de Residência: <div class="form-check form-check-inline">
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
            Bairro: <input type="text" placeholder="" class="form-control form-control-sm" required> 
            </div>
            <div class="col-sm-3">
            Município: <input type="text" placeholder="" class="form-control form-control-sm" required> 
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
            CEP: <input type="number" placeholder="" class="form-control form-control-sm" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Local de Trabalho: <input type="text" placeholder="" class="form-control form-control-sm" required> 
            </div>
            <div class="col-sm-4">
            Telefone: <input type="number" placeholder="" class="form-control form-control-sm" required> 
            </div>         
        </div>
    </form>
</div>
</body>
</html>