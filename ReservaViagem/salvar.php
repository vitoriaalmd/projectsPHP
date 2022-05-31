<?php
include 'conexaobd.php';

$nome=$_POST['nome'];
$DataN=$_POST['DataN'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$paisSai=$_POST['paisSai'];
$paisDes=$_POST['paisDes'];
$DataS=$_POST['DataS'];
$DataR=$_POST['DataR'];
$classe=$_POST['classe'];
$servicos=$_POST['servicos'];

$salvar = mysqli_query($conexaoBD, "INSERT INTO usuario(nome, DataN, email, telefone, paisSai, paisDes, DataS, DataR, classe, servicos) VALUES('$nome', '$DataN', '$email', '$telefone', '$paisSai', '$paisDes', '$DataS', '$DataR', '$classe', '$servicos')");

if ($salvar) {
    header('location: form.php');
}

?>