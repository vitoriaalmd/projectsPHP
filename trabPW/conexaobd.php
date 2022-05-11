<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBancoDeDados = "bancocrud";

$conexaoBD = mysqli_connect($servidor, $usuario, $senha,$nomeBancoDeDados);
if (!$conexaoBD){

    echo "Nao conectado ao banco";
}else{
        echo "conectado";
    }
?>