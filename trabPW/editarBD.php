<?php 
include 'conexaobd.php';
if(isset($_GET['id_usuario'])){
    $id_usuario=$_GET['id_usuario'];
    $consulta=mysqli_query($conexaobd, "SELECT * FROM usuario WHERE id_usuario=$id_usuario");
    $Contador = (is_array($consulta) ? count ($consulta) : 1);
    if($contador){
        $campos = mysqli_fetch_array($consulta);
        $nome=$campos['nome'];
    }
}
if(isset('$_POST['editar'])){
$id_usuario = $_GET['id_usuario'];
$consultaEditar= "UPDATE usuario SET nomecolunadobanco = '$nomecolunabanco';
}
?>