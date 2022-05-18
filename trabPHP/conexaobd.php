<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBancoDeDados = "bancocrud";

$conexaobd = mysqli_connect($servidor, $usuario, $senha,$nomeBancoDeDados);
if (!$conexaobd){

    echo "Não conectado ao banco";
}else{
        echo "Conectado";
    }
?>