<?php
include 'conexaobd.php';
    
    $escola = $_POST['escola'];
	$EscOrigem=$_POST['EscOrigem'];
	$MunEsc=$_POST['MunEsc'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo']; 
	$CVacina = $_POST['CVacina'];
	$CartSUS = $_POST['CartSUS'];
    $DataN = $_POST['DataN'];
	$nacionalidade = $_POST['nacionalidade'];
	$uf = $_POST['uf'];
	$transporte = $_POST['transporte'];
	$responsaveltransp = $_POST['responsaveltransp'];
	$email = $_POST['email'];
	$necessidadeesp = $_POST['necessidadeesp'];
	$indnecessidade = $_POST['indnecessidade'];
	$altashab = $_POST['altashab']; 
	$TranstornoGlob = $_POST['TranstornoGlob'];
	$raca = $_POST['raca'];
	$CPFaluno = $_POST['CPFaluno'];
	$RGaluno = $_POST['RGaluno'];
	$OrgaoExp = $_POST['OrgaoExp'];
	$uff = $_POST['uff'];
	$DataEx = $_POST['DataEx'];
	$NomeMae = $_POST['NomeMae'];
	$CPFmae = $_POST['CPFmae'];
	$Celmae = $_POST['Celmae'];
	$Nomepai = $_POST['Nomepai'];
	$CPFpai = $_POST['CPFpai'];
	$Celpai = $_POST['Celpai'];
	$RespLegal = $_POST['RespLegal'];
	$NomeResp = $_POST['NomeResp'];
	$CPFresp = $_POST['CPFresp'];
	$CelResp = $_POST['CelResp'];
	$End = $_POST['End'];
	$NC = $_POST['NC'];
	$ZonaDeRes = $_POST['ZonaDeRes'];
	$bairro = $_POST['bairro'];
	$municipio = $_POST['municipio'];
	$ufff = $_POST['ufff'];
	$cep = $_POST['cep'];
	$LT = $_POST['LT'];
	$Tel = $_POST['Tel'];

	

	

	$enviar = mysqli_query($conexaobd, "INSERT INTO usuario(nomeEscOrigem,	nomeMunOrigem, nomeAluno,	cartaoSus,	emailAluno,	CPFAluno,	RGAluno,	OrgaoExp,	nomeMae,	CPFMae,	CelMae,	nomePai, CPFPai,	CelPai,	NomeResp, CPFResp, CelResp, endereco, NCasa, bairro, municipio,	localTrab,	telefone,	cep,	EscAnterior,	sexo,	CVacina,	nacionalidade,	uf,	transporte,	responsaveltransp,	necessidadeesp,	indnecessidade,	altashab,	TranstornoGlob,	raca,	uff,	RespLegal,	ZonaDeRes,	ufff, DataN, DataEx) 
	VALUES ('$escola', '$EscOrigem', '$MunEsc', '$nome', '$sexo', '$CVacina', '$CartSUS', '$DataN', '$nacionalidade', '$uf', '$transporte', '$responsaveltransp', '$email', '$necessidadeesp', '$indnecessidade', '$altashab', '$TranstornoGlob', '$raca', '$CPFaluno', '$RGaluno', '$OrgaoExp', '$uff', '$DataEx', '$NomeMae', '$CPFmae' , '$Celmae' , '$Nomepai' , '$CPFpai', '$Celpai', '$RespLegal', '$NomeResp', '$CPFresp', '$CelResp', '$End', '$NC', '$ZonaDeRes', '$bairro', '$municipio', '$ufff', '$cep', '$LT', '$Tel')");
	
	if ($enviar) {
		header('location: banco.php');
	}
?>