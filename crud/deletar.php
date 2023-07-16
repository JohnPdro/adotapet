<?php
include "../inc/conexao.php";
$id = $_GET["id"];

$sql = "delete from animais where id_animal = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location: ../paginas-ong/pets-cadastrados-ong.php");
?>