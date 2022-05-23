<?php include'menu.php';
include 'salvar.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="trabbd.css">
    <title>Trabalho</title>
</head>
<body>
<div class="container">
<br>

		 <h1 class="cnt">Formulário de Matrícula</h1>
     <div class="line"></div>
       
      
      <br>
       <form method="post" action="salvar.php">

        <div class="row mb-3">
            <div class="col-sm-12">
            Escola Anterior: &nbsp <div class="form-check form-check-inline" required> 
                    <input class="form-check-input" name="escola" type="radio" id="inlineRadio1" value="publica">
                    Rede Pública de Ensino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="escola" type="radio" id="inlineRadio2" value="privada">
                Rede Privada
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
            Nome da escola de origem: <input type="text" name="EscOrigem" placeholder="Nome da escola de origem" class="form-control form-control-sm" id="EscOrigem" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
            Município da escola de origem: <input type="text" name="MunEsc" placeholder="Município da escola de origem" class="form-control form-control-sm" id="MunicEsc" required>
            </div>
        </div>
        <div class="line"></div>
       
        
        <br>
        <h2 class="cnt">Dados do(a) Estudante</h2>
        <div class="row mb-3">
            <div class="col-sm-12">
                Nome Completo: <input type="text" name="nome" placeholder="Nome" class="form-control form-control-sm" required>
            </div>
        </div>

        <div class ="row mb-3">
            <div class="col-sm-3">
                <label>Sexo:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="sexo" type="radio" id="inlineRadio3" value="feminino">
                    Feminino
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="sexo" type="radio" id="inlineRadio4" value="masculino">
                  Masculino
                </div>
            </div>
                <div class="col-sm-2">
                    <label>Cartão de Vacinação:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="CVacina" type="radio" id="inlineRadio5" value="sim">
                    Sim
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="CVacina" type="radio" id="inlineRadio6" value="nao">
                  Não
                </div>
                </div>
                <div class="col-sm-4">
                Nº do Cartão SUS: <input type="text" name="CartSUS" placeholder="000 0000 000 0000" class="form-control form-control-sm" id = "SUS" maxlength="15" oninput="mascaraa('sus')" required>  
                </div>
            <div class="col-sm-3">
                 <label>Data de Nascimento:</label>
                 <div class="input-group"  required> 
                
                 <input type="date" name="DataN" class="form-control form-control-sm" id="dataNascimento">
                 </div>
                 </div>
        </div>
        
        <div class="row">
            <div class="col-sm-7">
            <label>Nacionalidade:</label> <br>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="nacionalidade" type="radio" id="inlineRadio7" value="brasileiro">
                    Brasileiro
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="nacionalidade" type="radio" id="inlineRadio8" value="Bexterior">
                  Brasileiro - nascido no Exterior ou naturalizado
                </div>
                <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="nacionalidade" type="radio" id="inlineRadio9" value="estrangeiro">
                    Estrangeiro
                </div>
            </div>
            <div class="col-sm-5">
                    <br>
                          <label>UF (atual):</label>
                          <select class= "form-control-sm" name= "uf" required >
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
                    <input class="form-check-input" name="transporte" type="radio" id="inlineRadio10" value="utiliza">
                    Utiliza
                </div>
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="transporte" type="radio" id="inlineRadio11" value="nutiliza">
                  Não utiliza
                </div>  
            </div>
        <div class="col-sm-4">
                 <label>Poder público responsável pelo transporte:</label> <br>
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="responsaveltransp" type="radio" id="inlineRadio12" value="municipal">
                    <label class="form-check-label" for="inlineRadio12"> Municipal </label>
                </div> &nbsp
                <div class="form-check form-check-inline" > 
                <input class="form-check-input" name="responsaveltransp" type="radio" id="inlineRadio13" value="estadual">
                <label class="form-check-label" for="inlineRadio13">  Estadual </label>
                </div>  &nbsp
            </div>
            <div class="col-sm-5">
                Email do Aluno: <input type="email" name="email" placeholder="eeep@eeep.com" class="form-control form-control-sm" id="email" required>
            </div>
        </div>
       <div class="line"></div>
        <br>
        <br>
   

        <div class ="row mb-3">
            <div class="col-sm-3">
             <label>Portador de necessidade especial: </label>  
                    <div class="form-check form-check-inline" required>
                    <input class="form-check-input" name="necessidadeesp" type="radio" id="inlineRadio14" value="sim">
                    Sim
                </div> 
                <div class="form-check form-check-inline"> 
                <input class="form-check-input" name="necessidadeesp" type="radio" id="inlineRadio15" value="nao">
                Não 
                </div>  
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <label>Caso a resposta tenha sido SIM, indique a(s) necessidade especial:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineCheckbox1" value="cegueira">
                    <label class="form-check-label" for="inlineCheckbox1">Cegueira</label> 
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineCheckbox2" value="defauditiva">
                    <label class="form-check-label" for="inlineCheckbox2">Deficiêcia Auditiva</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineDeficienciaIntelectual" value="defintelectual">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Intelectual</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineDeficienciaIntelectual" value="deffisica">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Física</label><br>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineDeficienciaIntelectual" value="defmultipla">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Múltipla</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineDeficienciaIntelectual" value="baixaVisao">
                    <label class="form-check-label" for="inlineCheckbox3">Baixa Visão</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineDeficienciaIntelectual" value="defsurdez">
                    <label class="form-check-label" for="inlineCheckbox3">Deficiência Surdez</label>
                </div> &nbsp &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="indnecessidade" type="checkbox" id="inlineDeficienciaIntelectual" value="surdocegueira">
                    <label class="form-check-label" for="inlineCheckbox3">Surdocegueira</label>
                </div> &nbsp &nbsp
            </div>
        </div>

        <div class ="row mb-3">
            
            <div class= "col-sm-4">
            <label>Altas habilidades/Superdotação:</label>
            <div class="form-check form-check-inline">
                    <input class="form-check-input" name="altashab" type="checkbox" id="inlineDeficienciaIntelectual" value="altashabi">
                    <label class="form-check-label" for="inlineCheckbox3">Altas habilidades/Superdotação</label>
                </div> &nbsp &nbsp
        </div>
        <div class="col-sm-6">
                <label>Transtorno global de Desenvolvimento:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TranstornoGlob" id="inlineRadio16" value="autismoInf">
                    <label class="form-check-label" for="inlineRadio16">Autismo Infantil</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TranstornoGlob" id="inlineRadio17" value="SindromeAsp">
                    <label class="form-check-label" for="inlineRadio17">Síndrome de Asperger</label>
                </div> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TranstornoGlob" id="inlineRadio18" value="TranstornoDes">
                    <label class="form-check-label" for="inlineRadio18">Transtorno desintegrativo de infância</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="TranstornoGlob" id="inlineRadio19" value="SindromeRett">
                    <label class="form-check-label" for="inlineRadio19"> Síndrome de Rett</label>
                </div> &nbsp
            </div>
        </div>
       <div class="line"></div>
        <br>
        <br>

        <div class="row-mb-3">
            <div class="col-sm-10">
            Raça/Cor: <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="raca" id="inlineRadio20" value="amarela">
                    <label class="form-check-label" for="inlineRadio20">Amarela</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="raca" id="inlineRadio21" value="branca">
                    <label class="form-check-label" for="inlineRadio21">Branca</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="raca" id="inlineRadio22" value="NDeclarada">
                    <label class="form-check-label" for="inlineRadio22">Não declarada</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="raca" id="inlineRadio23" value="parda">
                    <label class="form-check-label" for="inlineRadio23">Parda</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="raca" id="inlineRadio24" value="preta">
                    <label class="form-check-label" for="inlineRadio24">Preta</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="raca" id="inlineRadio25" value="indigena">
                    <label class="form-check-label" for="inlineRadio25">Indígena</label>
                </div> 
            </div>
        </div>
        <br>

        <div class="row mb-3">
            <div class="col-sm-3">
                Nº CPF: <input type="text" name="CPFaluno" class="form-control form-control-sm" placeholder="000.000.000-00" id="CPF" maxlength="11" oninput="mascaraa('cpf')" required>
            </div>  &nbsp  &nbsp
            <div class="col-sm-3">
                Nº RG: <input type="text" name="RGaluno" class="form-control form-control-sm" placeholder="0000000000-0" id="rg" required>
            </div>  &nbsp  &nbsp
            <div class="col-sm-2">
                Orgão Exp. : <input type="text" name="OrgaoExp" class="form-control form-control-sm" placeholder="" id="orgExp" required>
            </div>  &nbsp  &nbsp
            <div class="col-sm-1">
            <label>UF:</label>
            <br>
                          <select class= "form-control-sm" name = "uff"  required >
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
                Data de Expedição: <input type="date" name="DataEx" class="form-control form-control-sm" placeholder="">
            </div>
        </div>
        <div class="line"></div>
        <br>
        <br>
         <h2 class="cnt">Dados dos Pais/Mães/Responsáveis Legais</h2>
        <div class="row mb-3">
            <div class="col-sm-6">
            Nome da Mãe: <input type="text" name="NomeMae" placeholder="nome" class="form-control form-control-sm" id="nomeMAE" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="text" name="CPFmae" placeholder="000.000.000-00" class="form-control form-control-sm" id="CPFmae" maxlength="11" oninput="mascaraa('cpf')" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="text" name="Celmae" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="CelularMae" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
            Nome do Pai: <input type="text" name="Nomepai" placeholder="nome" class="form-control form-control-sm" id="nomePai" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="text" name="CPFpai" placeholder="000.000.000-00" class="form-control form-control-sm" id="CPFpai" maxlength="11" oninput="mascaraa('cpf')" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="text" name="Celpai" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="CelularPai" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>
        </div>

        <div class="row-mb-3">
            <div class="col-sm-12">
            Responsável Legal do Aluno(a): <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="RespLegal" id="inlineRadio26" value="paimae">
                    <label class="form-check-label" for="inlineRadio26">Pai/Mãe</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="RespLegal" id="inlineRadio27" value="sopai">
                    <label class="form-check-label" for="inlineRadio27">Só Pai</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="RespLegal" id="inlineRadio28" value="somae">
                    <label class="form-check-label" for="inlineRadio28">Só Mãe</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="RespLegal" id="inlineRadio29" value="outroresplegal">
                    <label class="form-check-label" for="inlineRadio29">Outro Responsável Legal</label>
                </div> &nbsp
            </div>
        </div>
<br>
        <div class="row mb-3">
            <div class="col-sm-6">
            Nome do(a) Responsável: <input type="text" name="NomeResp" placeholder="nome" class="form-control form-control-sm" id="nomeRESP" required> 
            </div> 
            <div class="col-sm-3">
            Nº CPF: <input type="text" name="CPFresp" placeholder="000.000.000-00" class="form-control form-control-sm" id="CPFresp" maxlength="11" oninput="mascaraa('cpf')" required> 
            </div>
            <div class="col-sm-3">
            Celular: <input type="text" name="CelResp" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="CelularResp" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Endereço: <input type="text" name="End" placeholder="endereço" class="form-control form-control-sm" id="endereco" required> 
            </div> &nbsp &nbsp
            <div class="col-sm-1">
            Nº: <input type="number" name="NC" placeholder="" class="form-control form-control-sm" id="numero" required> 
            </div> &nbsp &nbsp &nbsp 
            <div class="col-sm-5">
                <br>
            Localização/Zona de Residência: <div class="form-check form-check-inline" required>
                    <input class="form-check-input" type="radio" name="ZonaDeRes" id="inlineRadio1" value="urbana">
                    <label class="form-check-label" for="inlineRadio1">Urbana</label>
                </div> &nbsp
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ZonaDeRes" id="inlineRadio2" value="rural">
                    <label class="form-check-label" for="inlineRadio2">Rural</label>
                </div> &nbsp
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Bairro: <input type="text" name="bairro" placeholder="bairro" class="form-control form-control-sm" id="bairro" required> 
            </div>
            <div class="col-sm-3">
            Município: <input type="text" name="municipio" placeholder="município" class="form-control form-control-sm" id="municipio" required> 
            </div>
            <div class="col-sm-1">
            <label>UF:</label>
            <br>
                          <select class= "form-control-sm" name="ufff" required >
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
            CEP: <input type="text" name="cep"  placeholder="00000-000" class="form-control form-control-sm" id="CEP" maxlength="8" oninput="mascaraa('cep')" required> 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-5">
            Local de Trabalho: <input type="text" name="LT" placeholder="" class="form-control form-control-sm" id="localTrab" required> 
            </div>
            <div class="col-sm-4">
            Telefone: <input type="text" name="Tel" placeholder="(00) 00000-0000" class="form-control form-control-sm" id = "CelularLT" maxlength="11" oninput="mascaraa('TelFixo')" required> 
            </div>         
        </div>
        <br>
        
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
        <br>
    </form>
</div>
<script src="mask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>   
</body>
</html>